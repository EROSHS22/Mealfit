function toggleSection(sectionId, button) {
    const section = document.getElementById(sectionId);
    if (section.style.display === 'none' || section.style.display === '') {
        section.style.display = 'block';
        button.textContent = '▲';
    } else {
        section.style.display = 'none';
        button.textContent = '▼';
    }
}
