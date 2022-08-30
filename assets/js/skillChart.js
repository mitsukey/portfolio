var ctx = document.getElementById("myRadarChart");
var myRadarChart = new Chart(ctx, {
    //グラフの種類
    type: 'radar',
    //データの設定
    data: {
        labels: ['HTML / CSS / JavaScript', 'Adobe XD / figma', 'Illustrator / Inkscape', 'Photoshop / GIMP', 'Word / Excel'],
        datasets: [{
        label: 'My Skill',
        //グラフのデータ
        data: [4, 4, 4, 3, 4],
        // データライン
        borderColor: 'red',
        }],
    },
    //オプションの設定
    options: {
        scales: {
            r: {
            //グラフの最小値・最大値
                min: 0,
                max: 5,
            //背景色
                backgroundColor: 'snow',
            //グリッドライン
                grid: {
                    color: 'pink',
                },
            //アングルライン
                angleLines: {
                    color: 'green',
                },
            //各項目のラベル
                pointLabels: {
                    color: '#000',
                },
            },
        },
    }, 
});