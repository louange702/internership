<!DOCTYPE html>
<html lang="rw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartSoft Business</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
      font-family: 'Segoe UI', sans-serif;
      color: white;
      background-color: #0a0a0a;
    }
    #bg {
      position: absolute;
      top: 0;
      left: 0;
    }
    .content {
      position: relative;
      z-index: 1;
      text-align: center;
      top: 30%;
    }
    h1 {
      font-size: 3em;
      margin-bottom: 0.5em;
    }
    p {
      font-size: 1.2em;
    }
    .cta-button {
      margin-top: 1em;
      padding: 0.8em 1.5em;
      font-size: 1em;
      background-color: #00b894;
      border: none;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <canvas id="bg"></canvas>
  <div class="content">
    <h1>SmartSoft Business</h1>
    <p>Gucunga ubucuruzi bwawe neza, mu buryo bugezweho.</p>
    <button class="cta-button">Tangirira Ubuntu</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/three@0.150.1/build/three.min.js"></script>
  <script>
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

    const renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('bg'), alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    const geometry = new THREE.TorusGeometry(10, 3, 16, 100);
    const material = new THREE.MeshStandardMaterial({ color: 0x00b894 });
    const torus = new THREE.Mesh(geometry, material);
    scene.add(torus);

    const pointLight = new THREE.PointLight(0xffffff);
    pointLight.position.set(5, 5, 5);
    scene.add(pointLight);

    camera.position.z = 30;

    function animate() {
      requestAnimationFrame(animate);
      torus.rotation.x += 0.01;
      torus.rotation.y += 0.01;
      renderer.render(scene, camera);
    }

    animate();

    window.addEventListener('resize', () => {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    });
  </script>
</body>
</html>
