function previewImage() {
    const foto = document.querySelector('.foto');
    const imgPreview = document.querySelector('.img-preview');
  
  
    const oFReader = new FileReader();
    oFReader.readAsDataURL(foto.files[0]);
  
    oFReader.onload = function (oFREvent) {
      imgPreview.src = oFREvent.target.result;
    };
  }