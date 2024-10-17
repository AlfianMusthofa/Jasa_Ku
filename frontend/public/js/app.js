const gender1 = document.getElementById('gender1');
const gender2 = document.getElementById('gender2');
const hiddenInput = document.getElementById('selectedGender');

function toggleGender(selected, other) {
   selected.classList.add('active');
   selected.classList.remove('inactive');
   other.classList.remove('active');
   other.classList.add('inactive');

   hiddenInput.value = selected === gender1 ? 'Laki-laki' : 'Perempuan';
}

gender1.addEventListener('click', () => toggleGender(gender1, gender2));
gender2.addEventListener('click', () => toggleGender(gender2, gender1));

