//const search = document.querySelector('.input-group input'),
//table_rows=document.querySelectorAll('tbody tr');
//search.addEventListener('input', searchTable);
//function searchTable(){
  //  table_rows.forEach((row,i) =>{
    //    let table_data = row.textContent,
      //  search_data = search.value;
        //row.classList.toggle('hide',table_data.indexOf(search_data)<0),
        //row.style.setProprety('--delay', i/25 + 's');
        //console.log(table_data.indexOf(search_data));
        
//})

//}
var search = document.getElementById('search');
search.addEventListener("keyup", function(){
    var keyword = this.value;
    
        var table = document.getElementById("table");
        var all_tr = table.getElementsByTagName("tr");
        for(var i=0; i<all_tr.length; i++){
            var od_column = all_tr[i].getElementsByTagName("td")[0];
            if(od_column){
                var od_value = od_column.textContent || od_column.innerText;
                
                if(od_value == keyword || keyword == ""){
                    
                    all_tr[i].style.display = ""; // show
                    //console.log("found")
                }else{
                    all_tr[i].style.display = "none"; // hide
                    
                    //console.log("not found")
                }
            }
        }
});       