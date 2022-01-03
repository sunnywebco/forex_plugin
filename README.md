
# Wordpress Plugin (نمایش اطلاعات بازار مالی فارکس - افزونه وردپرس فارکس)

نمایش اطلاعات بازار مالی فارکس به همراه قیمت ریال و قیمت دلار همزمان بدون کسری از ثانیه


![image](https://user-images.githubusercontent.com/55010722/147905338-d7c8a4c8-fdfe-4ddf-991b-f7432eceda7b.png)
## Installation (روش نصب و استفاده)

- Go to “Plugins” in your WordPress dashboard

- Click on “Add New”

- Find your plugin via File upload

- Install your plugin

- Activate the plugin
  

## (Plugin Help Programming) راهنما برنامه نویسی افزونه

https://sunnyweb.ir/plugins_fixer/

## (Plugin installation file) فایل نصب افزونه

https://api.sunnyweb.ir/data/fixer_plugin.zip

## (Sunny Web token) دریافت توکن رایگان سانی وب

https://api.sunnyweb.ir/register


## Example Response (نمونه خروجی درخواست وب سرویس)

https://api.sunnyweb.ir/api/fixer_money/[token]
```bash
 {
  "data": {
    "market": "forex",
    "data": [
      {
        "name": "USDCNY",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.007,
        "percentChange": 0.11,
        "ask": 6.3936
      },
      {
        "name": "GBPUSD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0016,
        "percentChange": 0.12,
        "ask": 1.3338
      },
      {
        "name": "btcUsd",
        "persianName": "بیتکوین\\دلار",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -75,
        "percentChange": -0.16,
        "category": "diff",
        "index": "38",
        "ask": 47011
      },
      {
        "name": "CADCHF",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0171,
        "percentChange": -2.31,
        "ask": 0.7228
      },
      {
        "name": "eurUsd",
        "persianName": "یورو\\دلار",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.0021,
        "percentChange": -0.19,
        "category": "diff",
        "index": "0",
        "ask": 1.1347
      },
      {
        "name": "nzdCad",
        "persianName": "دلار نیوزلند\\دلار کانادا",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0048,
        "percentChange": 0.56,
        "category": "diff",
        "index": "36",
        "ask": 0.8672
      },
      {
        "name": "USDSEK",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.075,
        "percentChange": 0.83,
        "ask": 9.1818
      },
      {
        "name": "nzdChf",
        "persianName": "دلار نیوزلند\\فرانک",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0023,
        "percentChange": 0.37,
        "category": "diff",
        "index": "37",
        "ask": 0.6251
      },
      {
        "name": "USDTRY",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.5223,
        "percentChange": 4.39,
        "ask": 12.4287
      },
      {
        "name": "gbpUsd",
        "persianName": "پوند\\دلار",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.0021,
        "percentChange": -0.16,
        "category": "diff",
        "index": "2",
        "ask": 1.3508
      },
      {
        "name": "usdZar",
        "persianName": "دلار\\رند آفریقای جنوبی",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.0368,
        "percentChange": -0.23,
        "category": "diff",
        "index": "34",
        "ask": 15.9592
      },
      {
        "name": "USDZAR",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.3456,
        "percentChange": 2.17,
        "ask": 16.3135
      },
      {
        "name": "AUDUSD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0075,
        "percentChange": -1.04,
        "ask": 0.7117
      },
      {
        "name": "gbpJpy",
        "persianName": "پوند\\ین ژاپن",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.12,
        "percentChange": 0.07,
        "category": "diff",
        "index": "10",
        "ask": 155.8
      },
      {
        "name": "usdMxn",
        "persianName": "دلار\\پزو مکزیک",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.043,
        "percentChange": 0.21,
        "category": "diff",
        "index": "33",
        "ask": 20.538
      },
      {
        "name": "cadJpy",
        "persianName": "دلار کانادا\\ین ژاپن",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.12,
        "percentChange": -0.13,
        "category": "diff",
        "index": "15",
        "ask": 90.96
      },
      {
        "name": "NZDCHF",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0113,
        "percentChange": -1.76,
        "ask": 0.6307
      },
      {
        "name": "eurChf",
        "persianName": "یورو\\فرانک",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0001,
        "percentChange": 0,
        "category": "diff",
        "index": "8",
        "ask": 1.0373
      },
      {
        "name": "USDJPY",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -2.16,
        "percentChange": -1.88,
        "ask": 113.19
      },
      {
        "name": "eurCad",
        "persianName": "یورو\\دلار کانادا",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0028,
        "percentChange": 0.19,
        "category": "diff",
        "index": "13",
        "ask": 1.439
      },
      {
        "name": "NZDJPY",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -1.83,
        "percentChange": -2.31,
        "ask": 77.31
      },
      {
        "name": "USDRUB",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.9182,
        "percentChange": 1.23,
        "ask": 75.61
      },
      {
        "name": "AUDJPY",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -2.21,
        "percentChange": -2.66,
        "ask": 80.76
      },
      {
        "name": "USDCAD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0137,
        "percentChange": 1.08,
        "ask": 1.2787
      },
      {
        "name": "usdCny",
        "persianName": "دلار\\یوآن چین",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0,
        "percentChange": 0,
        "category": "diff",
        "index": "25",
        "ask": 6.3601
      },
      {
        "name": "usdHkd",
        "persianName": "دلار\\دلار هنگ کنگ",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0029,
        "percentChange": 0.04,
        "category": "diff",
        "index": "27",
        "ask": 7.7989
      },
      {
        "name": "audChf",
        "persianName": "دلار استرالیا\\فرانک",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0006,
        "percentChange": 0.1,
        "category": "diff",
        "index": "22",
        "ask": 0.6632
      },
      {
        "name": "nzdJpy",
        "persianName": "دلار نیوزلند\\ین ژاپن",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.32,
        "percentChange": 0.4,
        "category": "diff",
        "index": "16",
        "ask": 78.87
      },
      {
        "name": "EURCHF",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0027,
        "percentChange": -0.26,
        "ask": 1.0465
      },
      {
        "name": "eurJpy",
        "persianName": "یورو\\ین ژاپن",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.06,
        "percentChange": 0.04,
        "category": "diff",
        "index": "5",
        "ask": 130.88
      },
      {
        "name": "USDHKD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0022,
        "percentChange": 0.03,
        "ask": 7.7986
      },
      {
        "name": "eurGbp",
        "persianName": "یورو\\پوند",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0,
        "percentChange": 0,
        "category": "diff",
        "index": "7",
        "ask": 0.8401
      },
      {
        "name": "EURJPY",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -1.01,
        "percentChange": -0.78,
        "ask": 128.28
      },
      {
        "name": "usdChf",
        "persianName": "دلار\\فرانک",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0018,
        "percentChange": 0.2,
        "category": "diff",
        "index": "3",
        "ask": 0.9142
      },
      {
        "name": "audJpy",
        "persianName": "دلار استرالیا\\ین ژاپن",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.12,
        "percentChange": 0.14,
        "category": "diff",
        "index": "9",
        "ask": 83.67
      },
      {
        "name": "gbpCad",
        "persianName": "پوند\\دلار کانادا",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0038,
        "percentChange": 0.22,
        "category": "diff",
        "index": "29",
        "ask": 1.7131
      },
      {
        "name": "audUsd",
        "persianName": "دلار استرالیا\\دلار",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.0007,
        "percentChange": -0.1,
        "category": "diff",
        "index": "6",
        "ask": 0.7254
      },
      {
        "name": "GBPNZD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0125,
        "percentChange": 0.64,
        "ask": 1.955
      },
      {
        "name": "AUDNZD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0043,
        "percentChange": -0.41,
        "ask": 1.0444
      },
      {
        "name": "CHFJPY",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.36,
        "percentChange": -0.29,
        "ask": 123.01
      },
      {
        "name": "EURAUD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0306,
        "percentChange": 1.96,
        "ask": 1.5894
      },
      {
        "name": "usdSgd",
        "persianName": "دلار\\دلار سنگاپور",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0009,
        "percentChange": 0.06,
        "category": "diff",
        "index": "26",
        "ask": 1.3501
      },
      {
        "name": "USDINR",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.59,
        "percentChange": 0.79,
        "ask": 75.09
      },
      {
        "name": "USDDKK",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0631,
        "percentChange": -0.95,
        "ask": 6.5708
      },
      {
        "name": "usdJpy",
        "persianName": "دلار\\ین ژاپن",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.25,
        "percentChange": 0.21,
        "category": "diff",
        "index": "1",
        "ask": 115.34
      },
      {
        "name": "gbpAud",
        "persianName": "پوند\\دلار استرالیا",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.0006,
        "percentChange": -0.03,
        "category": "diff",
        "index": "18",
        "ask": 1.8627
      },
      {
        "name": "EURNZD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0261,
        "percentChange": 1.6,
        "ask": 1.6602
      },
      {
        "name": "EURCAD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0303,
        "percentChange": 2.14,
        "ask": 1.448
      },
      {
        "name": "audNzd",
        "persianName": "دلار استرالیا\\دلار نیوزلند",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.0023,
        "percentChange": -0.22,
        "category": "diff",
        "index": "17",
        "ask": 1.0615
      },
      {
        "name": "EURGBP",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0078,
        "percentChange": 0.93,
        "ask": 0.8491
      },
      {
        "name": "GBPCHF",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0139,
        "percentChange": -1.11,
        "ask": 1.2332
      },
      {
        "name": "usdDkk",
        "persianName": "دلار\\کرون دانمارک",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0144,
        "percentChange": 0.22,
        "category": "diff",
        "index": "28",
        "ask": 6.5554
      },
      {
        "name": "CADJPY",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -2.58,
        "percentChange": -2.83,
        "ask": 88.6
      },
      {
        "name": "AUDCAD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0016,
        "percentChange": 0.18,
        "ask": 0.9114
      },
      {
        "name": "chfJpy",
        "persianName": "فرانک\\ین ژاپن",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.09,
        "percentChange": 0.08,
        "category": "diff",
        "index": "11",
        "ask": 126.22
      },
      {
        "name": "eurAud",
        "persianName": "یورو\\دلار استرالیا",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.001,
        "percentChange": -0.06,
        "category": "diff",
        "index": "19",
        "ask": 1.5647
      },
      {
        "name": "usdRub",
        "persianName": "دلار\\روبل روسیه",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.3226,
        "percentChange": 0.43,
        "category": "diff",
        "index": "31",
        "ask": 74.9765
      },
      {
        "name": "GBPJPY",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -2.53,
        "percentChange": -1.64,
        "ask": 151.17
      },
      {
        "name": "usdSek",
        "persianName": "دلار\\کرون سوئد",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0213,
        "percentChange": 0.24,
        "category": "diff",
        "index": "30",
        "ask": 9.0621
      },
      {
        "name": "USDSGD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0035,
        "percentChange": 0.26,
        "ask": 1.3716
      },
      {
        "name": "NZDUSD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0038,
        "percentChange": -0.55,
        "ask": 0.6823
      },
      {
        "name": "nzdUsd",
        "persianName": "دلار نیوزلند\\دلار",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0012,
        "percentChange": 0.18,
        "category": "diff",
        "index": "12",
        "ask": 0.6838
      },
      {
        "name": "GBPAUD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0199,
        "percentChange": 1.08,
        "ask": 1.8729
      },
      {
        "name": "USDCHF",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0117,
        "percentChange": -1.25,
        "ask": 0.9244
      },
      {
        "name": "usdTry",
        "persianName": "دلار\\لیر ترکیه",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.1935,
        "percentChange": 1.43,
        "category": "diff",
        "index": "32",
        "ask": 13.7862
      },
      {
        "name": "usdInr",
        "persianName": "دلار\\روپیه هند",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.171,
        "percentChange": -0.23,
        "category": "diff",
        "index": "24",
        "ask": 74.301
      },
      {
        "name": "gbpNzd",
        "persianName": "پوند\\دلار نیوزلند",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.0054,
        "percentChange": -0.28,
        "category": "diff",
        "index": "23",
        "ask": 1.9766
      },
      {
        "name": "NZDCAD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0057,
        "percentChange": 0.66,
        "ask": 0.8734
      },
      {
        "name": "EURUSD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.0115,
        "percentChange": 1.03,
        "ask": 1.1322
      },
      {
        "name": "BTCUSD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -3479.9,
        "percentChange": -6.01,
        "ask": 54404
      },
      {
        "name": "usdCad",
        "persianName": "دلار\\دلار کانادا",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0047,
        "percentChange": 0.37,
        "category": "diff",
        "index": "4",
        "ask": 1.2682
      },
      {
        "name": "USDMXN",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.3494,
        "percentChange": 1.62,
        "ask": 21.9122
      },
      {
        "name": "eurNzd",
        "persianName": "یورو\\دلار نیوزلند",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.005,
        "percentChange": -0.3,
        "category": "diff",
        "index": "21",
        "ask": 1.6604
      },
      {
        "name": "cadChf",
        "persianName": "دلار کانادا\\فرانک",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": -0.0012,
        "percentChange": -0.17,
        "category": "diff",
        "index": "35",
        "ask": 0.721
      },
      {
        "name": "AUDCHF",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": -0.0144,
        "percentChange": -2.14,
        "ask": 0.6588
      },
      {
        "name": "GBPCAD",
        "time": "10:08:00",
        "jDate": "14000906",
        "change": 0.022,
        "percentChange": 1.3,
        "ask": 1.7062
      },
      {
        "name": "gbpChf",
        "persianName": "پوند\\فرانک",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0005,
        "percentChange": 0.04,
        "category": "diff",
        "index": "20",
        "ask": 1.2349
      },
      {
        "name": "audCad",
        "persianName": "دلار استرالیا\\دلار کانادا",
        "time": "10:22:00",
        "jDate": "14001013",
        "change": 0.0026,
        "percentChange": 0.28,
        "category": "diff",
        "index": "14",
        "ask": 0.92
      }
    ],
    "totalLength": 78
  },
  "meta": {
    "shamsiDate": "14001013102343122",
    "requestId": "d1451a52-af3f-4714-803c-8a39fb1fd447"
  }
}
```



