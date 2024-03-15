let uploadedMedia = [];

function uploadIncident() {
    const location = document.getElementById("location").value;
    const uploaderName = document.getElementById("uploaderName").value;
    const videoInput = document.getElementById("uploadVideo");
    const imageInput = document.getElementById("uploadImage");

    if (!location || !uploaderName) {
        alert("Please provide location and uploader's name before submitting.");
        return;
    }

    const now = new Date();
    const timestamp = now.toISOString();

    const uploadedVideoName = videoInput.value ? videoInput.value.split('\\').pop() : '';
    const uploadedImageName = imageInput.value ? imageInput.value.split('\\').pop() : '';

    if (uploadedVideoName) {
        uploadedMedia.push({ type: 'video', name: uploadedVideoName, location: location, uploader: uploaderName, timestamp: timestamp });
    }

    if (uploadedImageName) {
        uploadedMedia.push({ type: 'image', name: uploadedImageName, location: location, uploader: uploaderName, timestamp: timestamp });
    }

    alert(`Incident reported at ${location}. Uploaded Video: ${uploadedVideoName}, Uploaded Screenshot: ${uploadedImageName}`);
    document.getElementById("incidentForm").reset();
    displayUploadedFiles();
}

function displayUploadedFiles() {
    const fileListElement = document.getElementById('fileList');
    fileListElement.innerHTML = '';

    uploadedMedia.forEach((media, index) => {
        const listItem = document.createElement('li');

        if (media.type === 'video') {
            listItem.innerHTML = `<div>
                                    <button onclick="openMediaModal('${getFilePath(media.name)}', true)">Play Video ${index + 1}</button>
                                    <p>Location: ${media.location}</p>
                                    <p>Uploader: ${media.uploader}</p>
                                    <p>Timestamp: ${media.timestamp}</p>
                                  </div>`;
        } else if (media.type === 'image') {
            listItem.innerHTML = `<div>
                                    <img src="${getFilePath(media.name)}" alt="Uploaded Image" style="max-width: 100%; cursor: pointer;" onclick="openMediaModal('${getFilePath(media.name)}', false)">
                                    <p>Location: ${media.location}</p>
                                    <p>Uploader: ${media.uploader}</p>
                                    <p>Timestamp: ${media.timestamp}</p>
                                  </div>`;
        }

        fileListElement.appendChild(listItem);
    });
}

function openMediaModal(filePath, isVideo) {
    const modal = document.getElementById('mediaModal');
    const mediaElement = isVideo
        ? `<video width="800" height="600" controls>
            <source src="${filePath}" type="video/mp4">
            Your browser does not support the video tag.
          </video>`
        : `<img src="${filePath}" alt="Uploaded Image" style="max-width: 100%;">`;

    modal.innerHTML = mediaElement;
    modal.style.display = 'block';

    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
}

function getFilePath(fileName) {
    // Replace this with the actual path to your uploaded files
    return `path/to/your/uploads/${fileName}`;
}
