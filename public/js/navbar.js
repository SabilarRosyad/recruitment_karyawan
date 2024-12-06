function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
}

function toggleDropdown() {
    const dropdown = document.getElementById('profileDropdown');
    const arrow = document.getElementById('dropdown-arrow');
    dropdown.classList.toggle('hidden'); // Toggle dropdown visibility

    // Rotate the arrow 180 degrees when dropdown is visible (rotate on the Y-axis)
    arrow.classList.toggle('rotate-180'); // Tailwind class to rotate the arrow
}