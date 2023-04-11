function XHR(url,method,data,beforesend,onsuccess,error){
    const xhr = new XMLHttpRequest();
    xhr.open(method,url)
    xhr.onload = ()=>{
        beforesend();
        if(xhr.readyState === XMLHttpRequest.DONE){
            onsuccess(
                JSON.parse(xhr.response)
            )
        }
    }
    xhr.onerror = (err)=>{
        error(err)
    }

    xhr.send(new URLSearchParams(data))
}