	document.getElementById('fileInput').addEventListener('change', function(event) {
    var files = event.target.files;
    var preview = document.getElementById('preview');
    
    // Clear any existing content
    preview.innerHTML = '';

    // Loop through all selected files
    for (var i = 0; i < files.length; i++) {
      var file = files[i];

      // Only process image files
      if (!file.type.match('image.*')) {
        continue;
      }

      var imgContainer = document.createElement('div');
      imgContainer.style.marginBottom = '20px'; // Spacing between each image container

      var img = document.createElement('img');
      img.src = URL.createObjectURL(file);
      img.style.height = '100px';
      img.style.width ='85px';
      img.style.display = 'block'; // Ensure the image is displayed in a block to put it on a new line
      img.style.marginBottom = '10px';
      img.style.marginLeft = '200px';
      img.style.marginTop = '-50px';
    

      var fileInfo = document.createElement('p');
      fileInfo.textContent = `File Name: ${file.name}, Type: ${file.type}, Size: ${file.size} bytes`;
      fileInfo.style.fontSize = '14px';
      fileInfo.style.marginTop = '0';

      // Append the image and file info to the container
      imgContainer.appendChild(img);
      imgContainer.appendChild(fileInfo);

      // Append the container to the preview div
      preview.appendChild(imgContainer);
    }
  });