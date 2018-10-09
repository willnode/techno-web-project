var data = {
	title: 'Loading...',
	kategori: [],
	menu: ["Beranda", "Profil", "Kategori", "Galeri", "Tentang"]
}

var app = new Vue({
	el: '#app',
	data: data,
})

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	   // Kalo selesai
	   var obj = JSON.parse(this.responseText);
	   data.title = obj.judul;
	   data.kategori = obj.kategori;
    }
};

xhttp.open("GET", "server.php", true);
xhttp.send();