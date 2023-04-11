class CartTempDB{
    #cartdb = [];

    constructor(){
        this.#updatefromlocdb();
    }

    #updatefromlocdb(){
        const cardlocaldb = JSON.parse(localStorage.getItem('cart'));
        if(cardlocaldb){
            this.#cartdb = cardlocaldb;
            return true;
        }else{
            return false;
        }
    }

    #updatelocdb(){
        localStorage.setItem("cart",JSON.stringify(this.#cartdb));
        this.#cartdb = JSON.parse(localStorage.getItem('cart'));
    }

    getAll(){
        this.#updatefromlocdb();
        return this.#cartdb;
    }

    itemCount(){
        return this.#cartdb.length;
    }

    removeItem(itemcode){
        const newlocdb = this.#cartdb.filter(finditem);
        this.#cartdb = newlocdb;
    
        function finditem(row){
            return row.itemcode != itemcode;
        }

        this.#updatelocdb();
    }

    removeDB(){
        localStorage.removeItem('cart');
        this.#cartdb = [];
    }

    saveUpdateItem(items = {itemcode:String(),count:Number()}){
        let d = true;
        this.#cartdb.forEach((row,i)=>{
            if(row.itemcode === items.itemcode){
                this.#cartdb[i]['count'] = items.count;
                d = false;
                this.#updatelocdb();
            }
        })
        
        if(d){
            this.#cartdb.push(items);
            this.#updatelocdb();
        }
    }

    getItem(itemcode){
        let foundrow = [];
        this.#cartdb.forEach((row,i)=>{
            if(row.itemcode === itemcode){
                foundrow = row;
            }
        })
        return foundrow;
    }
}

function formatnumber(price){
    return `Rs ${new Intl.NumberFormat().format(price)}`
}