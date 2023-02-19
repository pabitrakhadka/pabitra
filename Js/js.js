let type=new Typed(".autotyped",{
    strings:["Pabitra Khadka !","Web Developer !","Java Developer !","a Student"],
    typeSpeed:100,
    backSpeed:100,
    loop:true
});



const button = document.querySelector('#cv');

button.addEventListener('click', function() {
  alert('Button was clicked!');
  const downloadLink = document.createElement('a');
downloadLink.href = 'your/file/url';
downloadLink.download = 'cv.pdf';

document.body.appendChild(downloadLink);
downloadLink.click();
document.body.removeChild(downloadLink);
});


