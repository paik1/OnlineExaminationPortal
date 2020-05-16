var list=document.getElementById('list');
var add = document.getElementById('add');

var deleteBtn=document.getElementById('x');

add.addEventListener('click',addition);


      
        function addition(e){
            e.preventDefault();
            if( document.getElementById('cat').value ==''){
                alert('Type Something');
            }
            else{
            var newIteam = document.getElementById('cat').value;


            var li = document.createElement('li');
            li.className = 'listItems';
            li.appendChild(document.createTextNode(newIteam));


            
            document.getElementById('cat').value = '';
        }
    }
       