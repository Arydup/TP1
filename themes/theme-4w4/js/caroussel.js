/*------------------------------------------------------------------------------
Fonction qui déplace horizontalement le carrousel selon le bouton touché
----------------------------------------------------------------------------- */
(function(){
			let bout1 = document.getElementById('0');
			//console.log(bout1.id);
			let bout2 = document.getElementById('1');
			//console.log(bout2.id);
			let bout3 = document.getElementById('2');
			//console.log(bout3.id);
			let bout4 = document.getElementById('3');
			let bout5 = document.getElementById('4');

			let caroussel = document.querySelector('.caroussel');

			bout1.addEventListener('mousedown', function(){
				caroussel.style.transform = "translateX(0)";
			})
			bout2.addEventListener('mousedown', function(){
				caroussel.style.transform = "translateX(-100vw)";
			})
			bout3.addEventListener('mousedown', function(){
				caroussel.style.transform = "translateX(-200vw)";
			})
			bout4.addEventListener('mousedown', function(){
				caroussel.style.transform = "translateX(-300vw)";
			})
			bout5.addEventListener('mousedown', function(){
				caroussel.style.transform = "translateX(-400vw)";
			})
        }())
