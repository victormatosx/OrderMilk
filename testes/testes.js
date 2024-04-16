const dropdownToggle = document.querySelector('#dropdown-toggle');
const dropdownContent = document.querySelector('#dropdown-content');

dropdownToggle.addEventListener('click', () => {
  dropdownContent.style.display = dropdownContent.style.display === 'none' ? 'block' : 'none';
});