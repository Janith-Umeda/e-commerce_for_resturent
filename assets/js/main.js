const carttempdb = new CartTempDB();

const cartindicator = document.getElementById("cartindicator");
const cartbtn = document.getElementById("cartbtn");

if(carttempdb.itemCount() != 0){
    cartindicator.removeAttribute('hidden');
    cartindicator.innerText = carttempdb.itemCount();
}

const navitems = document.getElementById("nav_items");
const search_sec = document.getElementById("search_sec");
const search_btns = document.getElementById("search_btns");
const footer_sec = document.getElementById('footer_sec');

function changepos(){
    if(window.innerWidth <= 991){
        navitems?.classList.replace("flex-row-reverse","flex-row");
        search_sec?.classList.replace("col-8","col-12");
        search_btns?.classList.replace("col-4","col-12");
        footer_sec?.classList.replace("text-","text-center");
    }else{
        navitems?.classList.replace("flex-row","flex-row-reverse");
        search_sec?.classList.replace("col-12","col-8");
        search_btns?.classList.replace("col-12","col-4");
        footer_sec?.classList.replace("text-center","text-");
    }
}

window.addEventListener("resize",(e)=>{
    changepos();
})

changepos();

document.getElementById("yr").innerHTML = new Date().getFullYear();

(() => {
    'use strict'
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
      new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()

cartbtn.onclick = fetchcartitem;

function fetchcartitem(){
    XHR(
        'http://localhost/mejolaweb/api/products',
        'POST',
        {
            "mode":"cart",
            "requests":JSON.stringify(carttempdb.getAll())
        },
        ()=>{},
        (data)=>{showcartitems(data)},
        (err)=>{console.log(err);}
    )
}

function showcartitems(data){
    let rowtbl = "";
    if(data.length > 0){
        data.forEach((row,i)=>{
            rowtbl += `
                    <tr class="rem-tr" rem="false" id="${i}">
                        <td scope="row">${i+1}</td>
                        <td>${row.name}</td>
                        <td>${row.upri}</td>
                        <td>
                            <div class="btn-group">
                                <button 
                                    type="button" 
                                    onclick="changecartcount('inc','${row.itemcode}',${row.stock},${row.upri},${i})" 
                                    class="btn btn-outline-success btn-sm" 
                                    title="Increase"
                                >+</button>
                                <div class="btn btn-warning btn-sm" id="count_${i}">${row.count}</div>
                                <button 
                                    type="button" 
                                    onclick="changecartcount('dec','${row.itemcode}',${row.stock},${row.upri},${i})" 
                                    class="btn btn-outline-danger btn-sm" 
                                    title="Decrease"
                                >-</button>
                            </div>
                        </td>
                        <td id="total_${i}">Rs ${new Intl.NumberFormat().format(row.total)}/-</td>
                        <td><button onclick="removecartitem(${i},'${row.itemcode}')" class="btn btn-danger btn-sm">Remove</button></td>
                    </tr>`
        })
    }else{
        rowtbl = "No Items"
    }

    document.getElementById('cartbody').innerHTML = rowtbl;
}

document.getElementById('clear_cart').onclick = ()=>{
    carttempdb.removeDB();
    fetchproductitems();
    cartindicator.setAttribute('hidden',true);
}

function removecartitem(key,itemcode){

    carttempdb.removeItem(itemcode);

    document.getElementById(key).setAttribute('rem',true);
    cartindicator.innerText = carttempdb.itemCount();
    if(carttempdb.itemCount() === 0){
        cartindicator.setAttribute('hidden',true);
        carttempdb.removeDB();
    }

    const d = setInterval(()=>{
        document.getElementById(key).remove();
        fetchproductitems();
        clearInterval(d);
    },1000);
}

function changecartcount(mode,itemcode,stock,upri,id){
    const count_e = document.getElementById(`count_${id}`);
    const total_e = document.getElementById(`total_${id}`);
    let ccount = Number(carttempdb.getItem(itemcode).count);

    let ctotal = upri * ccount; 

    if(mode === 'inc'){
        ccount = ccount + 1
        ctotal = ctotal + upri;
    }else{
        ccount = ccount - 1
        ctotal = ctotal - upri;
    }

    if(ccount > 0 && ccount <= stock){
        count_e.innerText = ccount
        total_e.innerText = `${formatnumber(ctotal)}/-`;
        carttempdb.saveUpdateItem({itemcode:itemcode,count:ccount});
    }

}