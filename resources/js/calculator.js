document.addEventListener('DOMContentLoaded', function() {
    const apsc_crop_focalLengthInput = document.getElementById('apsc_crop_focal_length');
    const apsc_crop_apertureInput = document.getElementById('apsc_crop_aperture');
    const apsc_crop_cropFactorSelect = document.getElementById('apsc_crop_crop_factor');
    const apsc_crop_resultsDiv = document.querySelector('.apsc_crop_results');
    const apsc_crop_equivalentFocalLength = document.getElementById('apsc_crop_equivalent_focal_length');
    const apsc_crop_equivalentAperture = document.getElementById('apsc_crop_equivalent_aperture');

    function apsc_crop_calculateEquivalents() {
        const focalLength = parseFloat(apsc_crop_focalLengthInput.value);
        const aperture = parseFloat(apsc_crop_apertureInput.value);
        const cropFactor = parseFloat(apsc_crop_cropFactorSelect.value);

        if (focalLength && aperture && cropFactor) {
            const equivalentFocal = focalLength * cropFactor;
            const equivalentApertureValue = aperture * cropFactor;

            apsc_crop_equivalentFocalLength.textContent = equivalentFocal.toFixed(1) + 'mm';
            apsc_crop_equivalentAperture.textContent = 'f/' + equivalentApertureValue.toFixed(1);
            apsc_crop_resultsDiv.style.display = 'block';
        } else {
            apsc_crop_resultsDiv.style.display = 'none';
        }
    }

    // Add event listeners for real-time calculation
    apsc_crop_focalLengthInput.addEventListener('input', apsc_crop_calculateEquivalents);
    apsc_crop_apertureInput.addEventListener('input', apsc_crop_calculateEquivalents);
    apsc_crop_cropFactorSelect.addEventListener('change', apsc_crop_calculateEquivalents);

    // Initial calculation if values are pre-filled
    apsc_crop_calculateEquivalents();
}); 