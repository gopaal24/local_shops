window.onload = function(){
    const buttons = document.querySelectorAll('.card button');
    const contents = document.querySelectorAll('.content-container .content');
    const cards = document.getElementById('card_holder');

    const selectE1 = document.getElementById("mySelect");
    const loc = document.getElementById("location");

    buttons.forEach(function(button){
      button.addEventListener('click', function(){
        const target = this.dataset.target;
        if(target == "content1"){
          loc.innerHTML = "<p>Working</p>";
        }
      });

      selectE1.addEventListener("change", function(){
        if(selectE1.value === "1"){
          loc.innerHTML = "<p>Kalimandir</p>";
        }else if(selectE1.value === "2"){
          loc.innerHTML = "<p>Bandlguda</p>";
        }else if(selectE1.value === "3"){
          loc.innerHTML = "<p>Gandipet</p>";
        }else if(selectE1.value === "4"){
          loc.innerHTML = "<p>Narsing</p>";
        }
      });

    });
  }