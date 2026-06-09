<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Maharashtra Destinations</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
      color: #003366;
    }
    .grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }
    .card {
      width: 280px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      cursor: pointer;
      transition: transform 0.3s;
    }
    .card:hover {
      transform: scale(1.05);
    }
    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    .card h3 {
      margin: 10px;
      color: #003366;
    }
    .card p {
      margin: 0 10px 15px;
      color: #555;
    }

    /* Modal styling */
    .modal {
      display: none;
      position: fixed;
      z-index: 10;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.7);
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background: white;
      padding: 20px;
      border-radius: 10px;
      width: 80%;
      max-width: 700px;
      text-align: center;
    }
    .modal-content img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 15px;
    }
    .close {
      float: right;
      font-size: 24px;
      cursor: pointer;
      color: #333;
    }
  </style>
</head>
<body>
  <h1>Maharashtra Tourist Destinations</h1>
  <div class="grid">
    <div class="card" onclick="openModal('ahilyanagar')">
      <img src="https://copilot.microsoft.com/th/id/BCO.ahilyanagar-fort.png" alt="Ahilyanagar Fort">
      <h3>Ahmednagar (Ahilyanagar)</h3>
      <p>Shirdi Sai Baba Temple, Ahmednagar Fort, Meherabad, Bhandardara.</p>
    </div>
    <div class="card" onclick="openModal('akola')">
      <img src="https://copilot.microsoft.com/th/id/BCO.akola-tower.png" alt="Akola Tower">
      <h3>Akola</h3>
      <p>Narnala Fort, Raj Rajeshwar Temple, scenic hills.</p>
    </div>
  </div>

  <!-- Modal for Ahilyanagar -->
  <div id="ahilyanagar" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('ahilyanagar')">&times;</span>
      <h2>Ahmednagar (Ahilyanagar)</h2>
      <img src="https://copilot.microsoft.com/th/id/BCO.ahilyanagar-fort.png" alt="Ahilyanagar Fort">
      <p><b>Famous Spots:</b> Shirdi Sai Baba Temple, Ahmednagar Fort, Meherabad, Bhandardara Lake.</p>
      <p><b>Highlights:</b> Known for its spiritual heritage and scenic hill retreats. Ideal for history lovers and trekkers.</p>
    </div>
  </div>

  <!-- Modal for Akola -->
  <div id="akola" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('akola')">&times;</span>
      <h2>Akola</h2>
      <img src="https://copilot.microsoft.com/th/id/BCO.akola-tower.png" alt="Akola Tower">
      <p><b>Famous Spots:</b> Narnala Fort, Raj Rajeshwar Temple, scenic hills.</p>
      <p><b>Highlights:</b> A blend of ancient architecture and natural beauty, perfect for cultural exploration.</p>
    </div>
  </div>

  <script>
    function openModal(id) {
      document.getElementById(id).style.display = 'flex';
    }
    function closeModal(id) {
      document.getElementById(id).style.display = 'none';
    }
  </script>
</body>
</html>