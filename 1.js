const btnHandshake = document.querySelector('.btn-hand');
const inputJumlah = document.querySelector('.input-jumlah');
const outputJumlah = document.querySelector('.output-jumlah')

btnHandshake.addEventListener('click', () => ulang(inputJumlah.value))

function ulang(i) {
   x = countHandshake(i);
   outputJumlah.innerHTML = `Total jabatan unik sebanyak ${x} kali`;
}

function countHandshake(n) {
   if (n === 0 || n === '') {
      return 0;
   } else {
      return n - 1 + countHandshake(n - 1);
   }
}
