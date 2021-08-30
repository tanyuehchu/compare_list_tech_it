$(function () {
    $('#chart1').radarChart({
        size: [500, 400],
        step: 1,
        title: '',
        values: {
            '<?= $strobjA ?>': <?= $scoreA ?>,
            '<?= $strobjB ?>': <?= $scoreB ?>,
            '<?= $strobjC ?>': <?= $scoreC ?>,
            '<?= $strobjD ?>': <?= $scoreD ?>,
            '<?= $strobjE ?>': <?= $scoreE ?>,
        },
        showAxisLabels: true
    });
});

$('.card_radar').click(function () {

    $.post("product_info_api.php", {
        prod_id: 301
    }, function (obj) {
        console.log(obj.result);
        console.log('result');

        $('#chart1').html('');

        $('#chart1').radarChart({
            size: [500, 400],
            step: 1,
            title: '',
            values: {
                '<?= $strobjA ?>': 1,
                '<?= $strobjB ?>': 1,
                '<?= $strobjC ?>': 1,
                '<?= $strobjD ?>': 5,
                '<?= $strobjE ?>': 1,
            },
            showAxisLabels: true
        });
    }, "json");




})