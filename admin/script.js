var list=document.getElementById('list');
var add = document.getElementById('add');
var deleteBtn=document.getElementById('x');
var btn1 = document.getElementById('btn1');
    var btn2 = document.getElementById('btn2');
    btn1.addEventListener('click', category);
    btn2.addEventListener('click',que);
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

    

    function que(){
        document.getElementById('menu2').style.display = "block";
        document.getElementById('menu1').style.display = "none";
        //console.log(1);
    }
    function category(){
        document.getElementById('menu1').style.display = "block";
        document.getElementById('menu2').style.display = "none";
        //console.log(1);
    }
       