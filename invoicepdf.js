import { html2PDF } from 'jspdf-html2canvas';


html2PDF(node, options);


let btn = document.getElementById('btn');
let page = document.getElementById('pdfcontent');

btn.addEventListener('click', function(){
  html2PDF(page, {
    jsPDF: {
      format: 'a4',
    },
    imageType: 'image/jpeg',
    output: './pdf/generate.pdf'
  });
});