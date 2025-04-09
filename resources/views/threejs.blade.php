<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three.js avec Laravel</title>
    <style>
        body { margin: 0; }
        canvas { display: block; }
    </style>
</head>
<body>
    <!-- Scripts CDN pour r118 -->
    <script src="https://cdn.jsdelivr.net/npm/three@0.118.0/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.118.0/examples/js/controls/TrackballControls.js"></script>
    <script>
        // Scène, caméra et rendu
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        // Création du cube
        const geometry = new THREE.BoxGeometry();
        const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
        const cube = new THREE.Mesh(geometry, material);
        scene.add(cube);

        // Positionnement de la caméra
        camera.position.z = 5;

        // Contrôles Trackball
        const controls = new THREE.TrackballControls(camera, renderer.domElement);
        controls.rotateSpeed = 5.0; // Réactivité rotation
        controls.zoomSpeed = 2.0;   // Réactivité zoom
        controls.panSpeed = 1.0;    // Réactivité déplacement

        // Fonction d'animation
        function animate() {
            requestAnimationFrame(animate);

            // Plus de rotation automatique
            // cube.rotation.x += 0.01; // Supprimé
            // cube.rotation.y += 0.01; // Supprimé

            // Mise à jour des contrôles
            controls.update();

            // Rendu de la scène
            renderer.render(scene, camera);
        }

        animate();
    </script>
</body>
</html>