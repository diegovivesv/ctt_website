/*handlerGalleryPhotos.js*/

function viewPhotosInGallery(id){
	for(i=1; i<=20; i++){
		var nid = id + i.toString();
		img = document.getElementById(nid);
		img.style.display ="block";
	}
}

function hidePhotosFromGallery(id){
	for(i=1; i<=20; i++){
		var nid = id + i.toString();
		img = document.getElementById(nid);
		img.style.display ="none";
	}
}

