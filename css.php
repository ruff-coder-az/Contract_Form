<style>
        /* Custom styles */
        .form-container {
            max-width: 1000px; /* Adjust as needed */
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-field {
            margin-bottom: 15px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            align-items: center;
        }

        .form-field label {
            text-align: right;
            padding-right: 10px;
        }

        .form-field input[type="number"] {
            max-width: 70px;
        }
      


        .signature-area {
    border: 1px solid #ccc;
    padding: 10px;
    min-height: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

#signatureCanvas {
    border: 1px solid #000;
}

    </style>


<style>
        /* Your existing styles here */

        /* Excavation Options section styling */
        .excavation-options {
            border: 1px solid #ccc;
            padding: 15px;
            margin-top: 20px;
        }

        .excavation-option {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .excavation-label {
            flex: 1;
            font-weight: bold;
        }

        .excavation-quantity {
            width: 100px;
            text-align: center;
        }

        .excavation-cost {
            width: 150px;
            text-align: right;
        }
    </style>

<style>
    /* Custom styles */
    .fixed-sidebar {
      position: fixed;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      background-color: #f0f0f0;
      padding: 10px;
      width: 200px;
      z-index: 99;
      text-align: center;
      transition: transform 0.3s ease-in-out;
    }

    .hidden {
      transform: translateY(-50%) translateX(100%);
    }
  </style>