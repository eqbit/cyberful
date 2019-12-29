$(function () {
    if (document.getElementById('chart-wrap')) {
        var ctx = document.getElementById('chart-wrap').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['02.05', '09.05', '16.05', '23.05', '30.05', '06.06'],
                datasets: []
            },

            options: {
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            stacked: true
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            stacked: true
                        },
                    }],
                },
                animation: {
                    duration: 800
                }
            }
        });


        let $visibles = $('[data-check-visibility]');
        let toggler = false
        let graphs = [
            {
                label: 'Переходы из соц сетей',
                data: [68, 94, 111, 120, 331, 339],
                backgroundColor: [
                    'rgba(15, 255, 115, 0.6)',
                ],
                borderColor: [
                    'rgba(15, 255, 115, 1)',
                ],
                borderWidth: 2
            },
            {
                label: 'Прямые заходы',
                data: [44, 61, 128, 182, 192, 451],
                backgroundColor: [
                    'rgba(78, 184, 244, 0.7)',
                ],
                borderColor: [
                    'rgba(78, 184, 244, 1)',
                ],
                borderWidth: 2
            },
            {
                label: 'Переходы из поисковых систем',
                data: [132, 151, 284, 351, 406, 693],
                backgroundColor: [
                    'rgba(255, 152, 0, 0.7)',
                ],
                borderColor: [
                    'rgba(255, 152, 0, 1)',
                ],
                borderWidth: 2
            },

            {
                label: 'Переходы из контекстной рекламы',
                data: [162, 173, 168, 351, 361, 399],
                backgroundColor: [
                    'rgba(171, 15, 255, 0.6)',
                ],
                borderColor: [
                    'rgba(171, 15, 255, 1)',
                ],
                borderWidth: 2
            }]

        if ($visibles.length) {
            $(window).on('scroll', function () {
                $visibles.each(function () {
                    let $item = $(this);


                    if ($item.visible(true)) {
                        $item.addClass('visible');
                        if (!toggler) {
                            graphs.forEach(function (item, i) {
                                setTimeout(() => {
                                    myChart.data.datasets.push(item)
                                    myChart.update({
                                        duration: 800,
                                        easing: 'easeInOutSine'
                                    })
                                }, 800 * i++)
                            })
                            toggler = true
                        }
                    }
                });
            });
        }
    }
})

