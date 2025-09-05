document.getElementById('open-demo-modal').addEventListener('click', function () {
    document.getElementById('demoModal').style.display = 'block';
});

document.getElementById('close-demo-modal').addEventListener('click', function () {
    document.getElementById('demoModal').style.display = 'none';
});

// إغلاق عند النقر خارج المودال
window.addEventListener('click', function (event) {
    const modal = document.getElementById('demoModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});


    document.getElementById('currentYear').textContent = new Date().getFullYear();
