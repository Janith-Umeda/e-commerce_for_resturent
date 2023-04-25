function changeordercount(type,itemcode){
    const atc_btn = document.getElementById(`atc_${itemcode}`);
    const countind = document.getElementById(`count_${itemcode}`);
    const total = document.getElementById(`total_${itemcode}`);

    const ccount = Number(atc_btn.getAttribute('ccount'));
    const uprice = Number(atc_btn.getAttribute('uprice'));
    const stocke = Number(atc_btn.getAttribute('stockcount'));

    let tot = uprice * ccount;

    if(type === 'inc'){
        if(ccount < stocke){
            tot = tot + uprice;
            atc_btn.setAttribute('ccount',String(ccount+1));
            countind.innerText = ccount+1;
        }
    }else{
        if(ccount != 0){
            tot = tot - uprice;
            atc_btn.setAttribute('ccount',String(ccount-1));
            countind.innerText = ccount-1;
        }
    }
    
    total.innerText = `${formatnumber(tot)}/-`;
}

function addtocart(elm){
    const ccount = elm.getAttribute('ccount');
    const stock = elm.getAttribute('stockcount');
    const itemcode = elm.getAttribute("itemcode");

    if(ccount != 0 && stock != 0){
        elm.innerText = "Added";
        carttempdb.saveUpdateItem({itemcode:itemcode,count:ccount});
        cartindicator.removeAttribute("hidden");
        cartindicator.innerText = carttempdb.itemCount();

    }else{
        elm.innerText = "Add";
    }
}

function fetchproductitems(){
    XHR(
        `${window.origin}/api/products`,
        'POST',
        {
            "filter":"ratings",
            "category":"food",
            "mode":"show"
        },
        ()=>{},
        (data)=>{showproducts(data)},
        (err)=>{console.log(err);}
    )
}

function showproducts(products){    
    let product_cards = "";
    const product_sec = document.getElementById("product_section");
    
    products.forEach((row)=>{

        const cartdb = carttempdb.getItem(row.itemcode)

        product_cards += `
        <div class="col-sm-12 col-lg-4">
            <div class="card shadow-sm">
                <img 
                    class="card-img-top img-placeholder image-fluid" 
                    width="100%" 
                    height="225"
                    src="${row.image}"
                >
                <div class="card-body">
                    <h4 class="">
                        ${row.name}
                    </h4>
                    <p 
                        class="text-wrap" 
                        onmouseover="javascript:this.innerText=String('${row.des}')"
                        onmouseleave="javascript:this.innerText=String('${row.des}').substring(0,40)+'...'"
                    >
                        ${String(row.des).substring(0,40)}...
                    </p>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <div title="Current Price">RS: ${row.upri}</div>
                        <div 
                            class="badge  bg-${(row.stock > 0)? "success": "danger"}"
                            title="stock"
                        >
                            ${(row.stock > 0)?`${row.stock} in Stock`: "Out of Stock"}
                        </div>
                        <div title="Customers Ratings For this Product">
                            ${ratestar(row.ratings)}
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button 
                                type="button" 
                                onclick="changeordercount('inc','${row.itemcode}')" 
                                class="btn btn-outline-success" 
                                title="Increase"
                            >+</button>
                            <div class="btn btn-warning" id="count_${row.itemcode}">
                                ${cartdb?.count ? cartdb.count : '0' }
                            </div>
                            <button 
                                type="button" 
                                onclick="changeordercount('dec','${row.itemcode}')" 
                                class="btn btn-outline-danger" 
                                title="Decrease"
                            >-</button>
                        </div>
                        <div class="btn-group">
                            <div class="btn btn-warning" title="Total" id="total_${row.itemcode}">
                            ${cartdb?.count ? formatnumber(row.upri * cartdb.count)+'/-' : '0/-' }
                            </div>
                            <button 
                                class="btn btn-success" 
                                onclick="addtocart(this)" 
                                title="Add to Your Cart"
                                uprice="${row.upri}"
                                itemcode = '${row.itemcode}'
                                ccount="${cartdb?.count ? cartdb.count : '0' }"
                                id="atc_${row.itemcode}"
                                stockcount="${row.stock}"
                            >
                                ${cartdb?.count ? 'Added' : 'Add' }
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
    })
    product_sec && (product_sec.innerHTML = product_cards);
}

function ratestar(percent){
    let stars = "";
    let fills = 0;
    for (let i = 0; i < percent; i++) {
        if(i%20 === 0){
            fills++;
        }
    }

    for(let h = 0; h < 5-fills; h++){
        stars += `<i class="bi bi-star text-warning"></i>`;
    };
    
    for(let h = 0; h < fills; h++){
        stars += `<i class="bi bi-star-fill text-warning"></i>`;
    };

    return stars;
}

fetchproductitems();