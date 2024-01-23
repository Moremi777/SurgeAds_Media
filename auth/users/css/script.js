document.addEventListener('DOMContentLoaded', function() {
    const userAddedImage = localStorage.getItem('userAddedImage');

    if (userAddedImage) {
        createUserBox(userAddedImage);
    }
});

function redirectToDetailsPage() {
    // Redirect to the page where the user details are
    window.location.href = 'adsDetails.html';
}

function createUserBox(imageUrl) {
    const userBoxContainer = document.getElementById('userBoxContainer');

    // Create a new box with the user-added image
    const userBox = document.createElement('div');
    userBox.className = 'user-added-box';
    
    const userImage = document.createElement('img');
    userImage.src = imageUrl;
    userImage.alt = 'User Added Image';
    
    // Add click event listener to the user-added image
    userImage.addEventListener('click', redirectToDetailsPage);

    userBox.appendChild(userImage);
    userBoxContainer.appendChild(userBox);
}
