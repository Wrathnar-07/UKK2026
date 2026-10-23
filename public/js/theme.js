const toggleButton = document.getElementById('toggleThemeSwitch');
const darkMode = document.getElementById('lightMode');

toggleButton.addEventListener('click', () => {
  // 1. Toggle
  toggleButton.classList.toggle('active');

  // 2. currently active
  const isActive = toggleButton.classList.contains('active');

  // 3. Update accessibility state
  toggleButton.setAttribute('aria-checked', isActive ? 'true' : 'false');

  // 4. Change text
  darkMode.textContent = (isActive ? 'Darkmode  ' : 'Lightmode ');

  // 5. Chance themes, with exeptions

});

const type = document.getElementById('userType')
const account = document.getElementById('accountShape');