const content = document.querySelector('.simbol');
const panjang = document.querySelector('.panjang');
const btnCetak = document.querySelector('.cetakSimbol');

btnCetak.addEventListener('click', () => cetakSimbol(panjang.value))

function cetakSimbol(panjang) {
   content.innerHTML = "";
   if (panjang % 2 == 0) {
      for (i = 1; i <= panjang; i++) {
         for (j = 1; j <= panjang; j++) {
            if (i == 1 || i == panjang || j % 3 == 0) {
               content.insertAdjacentText('beforeend', "+  ");
            } else {
               content.insertAdjacentText('beforeend', "=  ");
            }
         }
         content.insertAdjacentElement('beforeend', document.createElement('br'))
      }
   } else {
      content.insertAdjacentText('beforeend', "Maaf angka harus bilangan genap");

   }
}