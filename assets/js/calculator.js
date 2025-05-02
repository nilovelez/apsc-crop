document.addEventListener('DOMContentLoaded', function() {
    const focalLengthInput = document.getElementById('focal_length');
    const apertureInput = document.getElementById('aperture');
    const cropFactorSelect = document.getElementById('crop_factor');
    const resultsDiv = document.querySelector('.apsc-results');
    const equivalentFocalLength = document.getElementById('equivalent_focal_length');
    const equivalentAperture = document.getElementById('equivalent_aperture');

    function calculateEquivalents() {
        const focalLength = parseFloat(focalLengthInput.value);
        const aperture = parseFloat(apertureInput.value);
        const cropFactor = parseFloat(cropFactorSelect.value);

        if (focalLength && aperture && cropFactor) {
            const equivalentFocal = focalLength * cropFactor;
            const equivalentApertureValue = aperture * cropFactor;

            equivalentFocalLength.textContent = equivalentFocal.toFixed(1) + 'mm';
            equivalentAperture.textContent = 'f/' + equivalentApertureValue.toFixed(1);
            resultsDiv.style.display = 'block';
        } else {
            resultsDiv.style.display = 'none';
        }
    }

    // Add event listeners for real-time calculation
    focalLengthInput.addEventListener('input', calculateEquivalents);
    apertureInput.addEventListener('input', calculateEquivalents);
    cropFactorSelect.addEventListener('change', calculateEquivalents);

    // Initial calculation if values are pre-filled
    calculateEquivalents();
}); 