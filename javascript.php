<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('w3-hide');
    }
</script>



<script>
    function updateExcavationCost() {
        const option = document.getElementById("excavationOption").value;
        const costSpan = document.querySelector(".excavation-cost");

        // Add JavaScript logic to update the cost based on the selected option
        // You can use a switch statement or other logic to determine the cost

        // Placeholder code for demonstration purposes
        const costs = ["$0.00", "$3.00", "$4.00", "$4.50", "$6.00"];
        costSpan.textContent = costs[option];
    }
</script>












<script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("new_contract");

form.addEventListener("input", function () {
    updateFormData(); // Update form data on any input change
  });

  function updateFormData() {
    const formData = {};

    // Iterate through all input fields and add their values to formData
    const inputFields = form.querySelectorAll("input");
    inputFields.forEach(function (input) {
      formData[input.name] = input.value;
    });

    // Additional field interactions and data...

    console.log(formData); // Display the updated form data object
  }
});




    
const canvas = document.getElementById('signatureCanvas');
const context = canvas.getContext('2d');
let isDrawing = false;

canvas.addEventListener('mousedown', startDrawing);
canvas.addEventListener('mousemove', draw);
canvas.addEventListener('mouseup', endDrawing);

canvas.addEventListener('touchstart', startDrawing);
canvas.addEventListener('touchmove', draw);
canvas.addEventListener('touchend', endDrawing);

function startDrawing(e) {
    isDrawing = true;
    context.beginPath();
    const x = e.clientX || e.touches[0].clientX;
    const y = e.clientY || e.touches[0].clientY;
    context.moveTo(x - canvas.getBoundingClientRect().left, y - canvas.getBoundingClientRect().top);
}

function draw(e) {
    if (!isDrawing) return;
    const x = e.clientX || e.touches[0].clientX;
    const y = e.clientY || e.touches[0].clientY;
    context.lineTo(x - canvas.getBoundingClientRect().left, y - canvas.getBoundingClientRect().top);
    context.stroke();
}

function endDrawing() {
    isDrawing = false;
}

document.getElementById('clearCanvas').addEventListener('click', () => {
    context.clearRect(0, 0, canvas.width, canvas.height);
});

</script>