<html>
<head>
    <script src="https://cdn.rawgit.com/naptha/tesseract.js/0.2.0/dist/tesseract.js">
    </script>
</head>
<body>
    <p>https://s3-media3.fl.yelpcdn.com/bphoto/yo2YEx_fp31djdNyFOYakg/o.jpg</p>
    <p>This is 750 x 1000.</p>
    <img src="https://s3-media3.fl.yelpcdn.com/bphoto/yo2YEx_fp31djdNyFOYakg/o.jpg" width="375" style="float:left;">
    <div style="width: 300px; float: left;">
        <input type="text" id="url" placeholder="Image URL" />
        <input type="button" id="go_button" value="Run" />
        <div id="ocr_results"> </div>
        <div id="ocr_status"> </div>
    </div>
    <script>
        function runOCR(url) {
            Tesseract.recognize(url)
                 .then(function(result) {
                    document.getElementById("ocr_results")
                            .innerText = result.text;
                 }).progress(function(result) {
                    document.getElementById("ocr_status")
                            .innerText = result["status"] + " (" +
                                (result["progress"] * 100) + "%)";
                });
        }

        document.getElementById("go_button")
                .addEventListener("click", function(e) {
                    var url = document.getElementById("url").value;
                    runOCR(url);
                });
    </script>
</body>
</html>

<!-- {
  "labelAnnotations": [
    {
      "mid": "/m/07s6nbt",
      "description": "text",
      "score": 0.8951286,
      "topicality": 0.8951286
    },
    {
      "mid": "/m/03gq5hm",
      "description": "font",
      "score": 0.7249275,
      "topicality": 0.7249275
    },
    {
      "mid": "/m/04gcl9",
      "description": "receipt",
      "score": 0.7051899,
      "topicality": 0.7051899
    }
  ],
  "textAnnotations": [
    {
      "locale": "en",
      "description": "Car Spa 0017\n3690 Beltline Road\n(972) 243-2932\n17-TOUCH2,\nShift 1, Empl 6508,\n05/28/15, 06:50 PM\nSale # 41623648004\n0.00\n0.00\n13.24\n6.75\n48.00\nMobil 1 Pk -TX\n1 Spa Supreme - Tx\n1 Spa Sup. Labor - TX\n1 Spa Sup. Parts - TX\n1 Mobil 1 Synth\n1 Supreme Inspection\n1 Waste Fee\n1 Lube Wash Discount\n5.80 Mobile 1 Ow40 Btl\n1 PRGDOF:POF5581\n1 Exp Carpet Clean\n1 Exp Seat Treat\n1 2 Detail Disc\n1 Emissions - OBD\n1 Sticker - ODB\n2.00\n-6.00\n10.00\n0.00\n39.99\n39.99\n- 19.99\n25.50\n0.00\nSubtotal\nSales Tax\nTotal\n159.48\n5.34\n164.82\n",
      "boundingPoly": {
        "vertices": [
          {
            "x": 74,
            "y": 33
          },
          {
            "x": 663,
            "y": 33
          },
          {
            "x": 663,
            "y": 956
          },
          {
            "x": 74,
            "y": 956
          }
        ]
      }
    },
    {
      "description": "Car",
      "boundingPoly": {
        "vertices": [
          {
            "x": 274,
            "y": 33
          },
          {
            "x": 313,
            "y": 33
          },
          {
            "x": 313,
            "y": 60
          },
          {
            "x": 274,
            "y": 60
          }
        ]
      }
    },
    {
      "description": "Spa",
      "boundingPoly": {
        "vertices": [
          {
            "x": 332,
            "y": 33
          },
          {
            "x": 366,
            "y": 33
          },
          {
            "x": 366,
            "y": 60
          },
          {
            "x": 332,
            "y": 60
          }
        ]
      }
    },
    {
      "description": "0017",
      "boundingPoly": {
        "vertices": [
          {
            "x": 383,
            "y": 33
          },
          {
            "x": 435,
            "y": 33
          },
          {
            "x": 435,
            "y": 60
          },
          {
            "x": 383,
            "y": 60
          }
        ]
      }
    },
    {
      "description": "3690",
      "boundingPoly": {
        "vertices": [
          {
            "x": 235,
            "y": 60
          },
          {
            "x": 283,
            "y": 60
          },
          {
            "x": 283,
            "y": 84
          },
          {
            "x": 235,
            "y": 84
          }
        ]
      }
    },
    {
      "description": "Beltline",
      "boundingPoly": {
        "vertices": [
          {
            "x": 300,
            "y": 60
          },
          {
            "x": 409,
            "y": 60
          },
          {
            "x": 409,
            "y": 84
          },
          {
            "x": 300,
            "y": 84
          }
        ]
      }
    },
    {
      "description": "Road",
      "boundingPoly": {
        "vertices": [
          {
            "x": 426,
            "y": 60
          },
          {
            "x": 479,
            "y": 60
          },
          {
            "x": 479,
            "y": 84
          },
          {
            "x": 426,
            "y": 84
          }
        ]
      }
    },
    {
      "description": "(",
      "boundingPoly": {
        "vertices": [
          {
            "x": 265,
            "y": 89
          },
          {
            "x": 272,
            "y": 89
          },
          {
            "x": 272,
            "y": 116
          },
          {
            "x": 265,
            "y": 116
          }
        ]
      }
    },
    {
      "description": "972",
      "boundingPoly": {
        "vertices": [
          {
            "x": 274,
            "y": 89
          },
          {
            "x": 313,
            "y": 89
          },
          {
            "x": 313,
            "y": 116
          },
          {
            "x": 274,
            "y": 116
          }
        ]
      }
    },
    {
      "description": ")",
      "boundingPoly": {
        "vertices": [
          {
            "x": 318,
            "y": 89
          },
          {
            "x": 325,
            "y": 89
          },
          {
            "x": 325,
            "y": 116
          },
          {
            "x": 318,
            "y": 116
          }
        ]
      }
    },
    {
      "description": "243",
      "boundingPoly": {
        "vertices": [
          {
            "x": 344,
            "y": 89
          },
          {
            "x": 383,
            "y": 89
          },
          {
            "x": 383,
            "y": 116
          },
          {
            "x": 344,
            "y": 116
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 388,
            "y": 89
          },
          {
            "x": 395,
            "y": 89
          },
          {
            "x": 395,
            "y": 116
          },
          {
            "x": 388,
            "y": 116
          }
        ]
      }
    },
    {
      "description": "2932",
      "boundingPoly": {
        "vertices": [
          {
            "x": 400,
            "y": 89
          },
          {
            "x": 453,
            "y": 89
          },
          {
            "x": 453,
            "y": 116
          },
          {
            "x": 400,
            "y": 116
          }
        ]
      }
    },
    {
      "description": "17",
      "boundingPoly": {
        "vertices": [
          {
            "x": 77,
            "y": 147
          },
          {
            "x": 100,
            "y": 147
          },
          {
            "x": 100,
            "y": 178
          },
          {
            "x": 77,
            "y": 178
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 103,
            "y": 147
          },
          {
            "x": 111,
            "y": 147
          },
          {
            "x": 111,
            "y": 178
          },
          {
            "x": 103,
            "y": 178
          }
        ]
      }
    },
    {
      "description": "TOUCH2",
      "boundingPoly": {
        "vertices": [
          {
            "x": 123,
            "y": 147
          },
          {
            "x": 200,
            "y": 147
          },
          {
            "x": 200,
            "y": 178
          },
          {
            "x": 123,
            "y": 178
          }
        ]
      }
    },
    {
      "description": ",",
      "boundingPoly": {
        "vertices": [
          {
            "x": 206,
            "y": 147
          },
          {
            "x": 214,
            "y": 147
          },
          {
            "x": 214,
            "y": 178
          },
          {
            "x": 206,
            "y": 178
          }
        ]
      }
    },
    {
      "description": "Shift",
      "boundingPoly": {
        "vertices": [
          {
            "x": 74,
            "y": 180
          },
          {
            "x": 145,
            "y": 180
          },
          {
            "x": 145,
            "y": 215
          },
          {
            "x": 74,
            "y": 215
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 163,
            "y": 181
          },
          {
            "x": 172,
            "y": 181
          },
          {
            "x": 172,
            "y": 215
          },
          {
            "x": 163,
            "y": 215
          }
        ]
      }
    },
    {
      "description": ",",
      "boundingPoly": {
        "vertices": [
          {
            "x": 177,
            "y": 181
          },
          {
            "x": 186,
            "y": 181
          },
          {
            "x": 186,
            "y": 215
          },
          {
            "x": 177,
            "y": 215
          }
        ]
      }
    },
    {
      "description": "Empl",
      "boundingPoly": {
        "vertices": [
          {
            "x": 205,
            "y": 181
          },
          {
            "x": 262,
            "y": 181
          },
          {
            "x": 262,
            "y": 215
          },
          {
            "x": 205,
            "y": 215
          }
        ]
      }
    },
    {
      "description": "6508",
      "boundingPoly": {
        "vertices": [
          {
            "x": 274,
            "y": 181
          },
          {
            "x": 327,
            "y": 181
          },
          {
            "x": 327,
            "y": 216
          },
          {
            "x": 274,
            "y": 216
          }
        ]
      }
    },
    {
      "description": ",",
      "boundingPoly": {
        "vertices": [
          {
            "x": 334,
            "y": 182
          },
          {
            "x": 343,
            "y": 182
          },
          {
            "x": 343,
            "y": 216
          },
          {
            "x": 334,
            "y": 216
          }
        ]
      }
    },
    {
      "description": "05",
      "boundingPoly": {
        "vertices": [
          {
            "x": 385,
            "y": 150
          },
          {
            "x": 408,
            "y": 150
          },
          {
            "x": 408,
            "y": 182
          },
          {
            "x": 385,
            "y": 182
          }
        ]
      }
    },
    {
      "description": "/",
      "boundingPoly": {
        "vertices": [
          {
            "x": 419,
            "y": 150
          },
          {
            "x": 427,
            "y": 150
          },
          {
            "x": 427,
            "y": 182
          },
          {
            "x": 419,
            "y": 182
          }
        ]
      }
    },
    {
      "description": "28",
      "boundingPoly": {
        "vertices": [
          {
            "x": 432,
            "y": 150
          },
          {
            "x": 450,
            "y": 150
          },
          {
            "x": 450,
            "y": 182
          },
          {
            "x": 432,
            "y": 182
          }
        ]
      }
    },
    {
      "description": "/",
      "boundingPoly": {
        "vertices": [
          {
            "x": 458,
            "y": 150
          },
          {
            "x": 466,
            "y": 150
          },
          {
            "x": 466,
            "y": 182
          },
          {
            "x": 458,
            "y": 182
          }
        ]
      }
    },
    {
      "description": "15",
      "boundingPoly": {
        "vertices": [
          {
            "x": 475,
            "y": 150
          },
          {
            "x": 493,
            "y": 150
          },
          {
            "x": 493,
            "y": 182
          },
          {
            "x": 475,
            "y": 182
          }
        ]
      }
    },
    {
      "description": ",",
      "boundingPoly": {
        "vertices": [
          {
            "x": 501,
            "y": 150
          },
          {
            "x": 509,
            "y": 150
          },
          {
            "x": 509,
            "y": 182
          },
          {
            "x": 501,
            "y": 182
          }
        ]
      }
    },
    {
      "description": "06",
      "boundingPoly": {
        "vertices": [
          {
            "x": 527,
            "y": 150
          },
          {
            "x": 550,
            "y": 150
          },
          {
            "x": 550,
            "y": 182
          },
          {
            "x": 527,
            "y": 182
          }
        ]
      }
    },
    {
      "description": ":",
      "boundingPoly": {
        "vertices": [
          {
            "x": 557,
            "y": 150
          },
          {
            "x": 565,
            "y": 150
          },
          {
            "x": 565,
            "y": 182
          },
          {
            "x": 557,
            "y": 182
          }
        ]
      }
    },
    {
      "description": "50",
      "boundingPoly": {
        "vertices": [
          {
            "x": 570,
            "y": 150
          },
          {
            "x": 593,
            "y": 150
          },
          {
            "x": 593,
            "y": 182
          },
          {
            "x": 570,
            "y": 182
          }
        ]
      }
    },
    {
      "description": "PM",
      "boundingPoly": {
        "vertices": [
          {
            "x": 607,
            "y": 150
          },
          {
            "x": 637,
            "y": 150
          },
          {
            "x": 637,
            "y": 182
          },
          {
            "x": 607,
            "y": 182
          }
        ]
      }
    },
    {
      "description": "Sale",
      "boundingPoly": {
        "vertices": [
          {
            "x": 389,
            "y": 182
          },
          {
            "x": 441,
            "y": 182
          },
          {
            "x": 441,
            "y": 217
          },
          {
            "x": 389,
            "y": 217
          }
        ]
      }
    },
    {
      "description": "#",
      "boundingPoly": {
        "vertices": [
          {
            "x": 457,
            "y": 183
          },
          {
            "x": 466,
            "y": 183
          },
          {
            "x": 466,
            "y": 217
          },
          {
            "x": 457,
            "y": 217
          }
        ]
      }
    },
    {
      "description": "41623648004",
      "boundingPoly": {
        "vertices": [
          {
            "x": 486,
            "y": 183
          },
          {
            "x": 638,
            "y": 184
          },
          {
            "x": 638,
            "y": 218
          },
          {
            "x": 486,
            "y": 217
          }
        ]
      }
    },
    {
      "description": "0",
      "boundingPoly": {
        "vertices": [
          {
            "x": 573,
            "y": 252
          },
          {
            "x": 581,
            "y": 252
          },
          {
            "x": 581,
            "y": 282
          },
          {
            "x": 573,
            "y": 282
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 588,
            "y": 252
          },
          {
            "x": 596,
            "y": 252
          },
          {
            "x": 596,
            "y": 282
          },
          {
            "x": 588,
            "y": 282
          }
        ]
      }
    },
    {
      "description": "00",
      "boundingPoly": {
        "vertices": [
          {
            "x": 599,
            "y": 252
          },
          {
            "x": 621,
            "y": 252
          },
          {
            "x": 621,
            "y": 282
          },
          {
            "x": 599,
            "y": 282
          }
        ]
      }
    },
    {
      "description": "0",
      "boundingPoly": {
        "vertices": [
          {
            "x": 574,
            "y": 286
          },
          {
            "x": 582,
            "y": 286
          },
          {
            "x": 582,
            "y": 318
          },
          {
            "x": 574,
            "y": 318
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 590,
            "y": 286
          },
          {
            "x": 598,
            "y": 286
          },
          {
            "x": 598,
            "y": 318
          },
          {
            "x": 590,
            "y": 318
          }
        ]
      }
    },
    {
      "description": "00",
      "boundingPoly": {
        "vertices": [
          {
            "x": 599,
            "y": 286
          },
          {
            "x": 622,
            "y": 286
          },
          {
            "x": 622,
            "y": 318
          },
          {
            "x": 599,
            "y": 318
          }
        ]
      }
    },
    {
      "description": "13",
      "boundingPoly": {
        "vertices": [
          {
            "x": 562,
            "y": 320
          },
          {
            "x": 586,
            "y": 320
          },
          {
            "x": 586,
            "y": 352
          },
          {
            "x": 562,
            "y": 352
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 590,
            "y": 320
          },
          {
            "x": 598,
            "y": 320
          },
          {
            "x": 598,
            "y": 352
          },
          {
            "x": 590,
            "y": 352
          }
        ]
      }
    },
    {
      "description": "24",
      "boundingPoly": {
        "vertices": [
          {
            "x": 602,
            "y": 320
          },
          {
            "x": 625,
            "y": 320
          },
          {
            "x": 625,
            "y": 352
          },
          {
            "x": 602,
            "y": 352
          }
        ]
      }
    },
    {
      "description": "6",
      "boundingPoly": {
        "vertices": [
          {
            "x": 571,
            "y": 358
          },
          {
            "x": 579,
            "y": 358
          },
          {
            "x": 579,
            "y": 389
          },
          {
            "x": 571,
            "y": 389
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 591,
            "y": 358
          },
          {
            "x": 599,
            "y": 358
          },
          {
            "x": 599,
            "y": 389
          },
          {
            "x": 591,
            "y": 389
          }
        ]
      }
    },
    {
      "description": "75",
      "boundingPoly": {
        "vertices": [
          {
            "x": 602,
            "y": 358
          },
          {
            "x": 624,
            "y": 358
          },
          {
            "x": 624,
            "y": 389
          },
          {
            "x": 602,
            "y": 389
          }
        ]
      }
    },
    {
      "description": "48",
      "boundingPoly": {
        "vertices": [
          {
            "x": 559,
            "y": 388
          },
          {
            "x": 587,
            "y": 388
          },
          {
            "x": 587,
            "y": 425
          },
          {
            "x": 559,
            "y": 425
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 591,
            "y": 388
          },
          {
            "x": 601,
            "y": 388
          },
          {
            "x": 601,
            "y": 425
          },
          {
            "x": 591,
            "y": 425
          }
        ]
      }
    },
    {
      "description": "00",
      "boundingPoly": {
        "vertices": [
          {
            "x": 607,
            "y": 388
          },
          {
            "x": 627,
            "y": 388
          },
          {
            "x": 627,
            "y": 425
          },
          {
            "x": 607,
            "y": 425
          }
        ]
      }
    },
    {
      "description": "Mobil",
      "boundingPoly": {
        "vertices": [
          {
            "x": 185,
            "y": 250
          },
          {
            "x": 256,
            "y": 250
          },
          {
            "x": 256,
            "y": 281
          },
          {
            "x": 185,
            "y": 281
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 277,
            "y": 250
          },
          {
            "x": 285,
            "y": 250
          },
          {
            "x": 285,
            "y": 281
          },
          {
            "x": 277,
            "y": 281
          }
        ]
      }
    },
    {
      "description": "Pk",
      "boundingPoly": {
        "vertices": [
          {
            "x": 302,
            "y": 250
          },
          {
            "x": 324,
            "y": 250
          },
          {
            "x": 324,
            "y": 281
          },
          {
            "x": 302,
            "y": 281
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 344,
            "y": 250
          },
          {
            "x": 352,
            "y": 250
          },
          {
            "x": 352,
            "y": 281
          },
          {
            "x": 344,
            "y": 281
          }
        ]
      }
    },
    {
      "description": "TX",
      "boundingPoly": {
        "vertices": [
          {
            "x": 363,
            "y": 250
          },
          {
            "x": 380,
            "y": 250
          },
          {
            "x": 380,
            "y": 281
          },
          {
            "x": 363,
            "y": 281
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 163,
            "y": 286
          },
          {
            "x": 171,
            "y": 286
          },
          {
            "x": 171,
            "y": 318
          },
          {
            "x": 163,
            "y": 318
          }
        ]
      }
    },
    {
      "description": "Spa",
      "boundingPoly": {
        "vertices": [
          {
            "x": 189,
            "y": 286
          },
          {
            "x": 225,
            "y": 286
          },
          {
            "x": 225,
            "y": 318
          },
          {
            "x": 189,
            "y": 318
          }
        ]
      }
    },
    {
      "description": "Supreme",
      "boundingPoly": {
        "vertices": [
          {
            "x": 245,
            "y": 286
          },
          {
            "x": 342,
            "y": 286
          },
          {
            "x": 342,
            "y": 318
          },
          {
            "x": 245,
            "y": 318
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 361,
            "y": 286
          },
          {
            "x": 369,
            "y": 286
          },
          {
            "x": 369,
            "y": 318
          },
          {
            "x": 361,
            "y": 318
          }
        ]
      }
    },
    {
      "description": "Tx",
      "boundingPoly": {
        "vertices": [
          {
            "x": 390,
            "y": 286
          },
          {
            "x": 413,
            "y": 286
          },
          {
            "x": 413,
            "y": 318
          },
          {
            "x": 390,
            "y": 318
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 161,
            "y": 320
          },
          {
            "x": 170,
            "y": 320
          },
          {
            "x": 170,
            "y": 354
          },
          {
            "x": 161,
            "y": 354
          }
        ]
      }
    },
    {
      "description": "Spa",
      "boundingPoly": {
        "vertices": [
          {
            "x": 188,
            "y": 320
          },
          {
            "x": 227,
            "y": 320
          },
          {
            "x": 227,
            "y": 354
          },
          {
            "x": 188,
            "y": 354
          }
        ]
      }
    },
    {
      "description": "Sup",
      "boundingPoly": {
        "vertices": [
          {
            "x": 244,
            "y": 320
          },
          {
            "x": 283,
            "y": 320
          },
          {
            "x": 283,
            "y": 354
          },
          {
            "x": 244,
            "y": 354
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 290,
            "y": 320
          },
          {
            "x": 299,
            "y": 320
          },
          {
            "x": 299,
            "y": 354
          },
          {
            "x": 290,
            "y": 354
          }
        ]
      }
    },
    {
      "description": "Labor",
      "boundingPoly": {
        "vertices": [
          {
            "x": 317,
            "y": 320
          },
          {
            "x": 384,
            "y": 320
          },
          {
            "x": 384,
            "y": 354
          },
          {
            "x": 317,
            "y": 354
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 402,
            "y": 320
          },
          {
            "x": 411,
            "y": 320
          },
          {
            "x": 411,
            "y": 354
          },
          {
            "x": 402,
            "y": 354
          }
        ]
      }
    },
    {
      "description": "TX",
      "boundingPoly": {
        "vertices": [
          {
            "x": 434,
            "y": 320
          },
          {
            "x": 453,
            "y": 320
          },
          {
            "x": 453,
            "y": 354
          },
          {
            "x": 434,
            "y": 354
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 163,
            "y": 354
          },
          {
            "x": 171,
            "y": 354
          },
          {
            "x": 171,
            "y": 386
          },
          {
            "x": 163,
            "y": 386
          }
        ]
      }
    },
    {
      "description": "Spa",
      "boundingPoly": {
        "vertices": [
          {
            "x": 189,
            "y": 354
          },
          {
            "x": 225,
            "y": 354
          },
          {
            "x": 225,
            "y": 386
          },
          {
            "x": 189,
            "y": 386
          }
        ]
      }
    },
    {
      "description": "Sup",
      "boundingPoly": {
        "vertices": [
          {
            "x": 245,
            "y": 354
          },
          {
            "x": 281,
            "y": 354
          },
          {
            "x": 281,
            "y": 386
          },
          {
            "x": 245,
            "y": 386
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 292,
            "y": 354
          },
          {
            "x": 300,
            "y": 354
          },
          {
            "x": 300,
            "y": 386
          },
          {
            "x": 292,
            "y": 386
          }
        ]
      }
    },
    {
      "description": "Parts",
      "boundingPoly": {
        "vertices": [
          {
            "x": 317,
            "y": 354
          },
          {
            "x": 388,
            "y": 354
          },
          {
            "x": 388,
            "y": 386
          },
          {
            "x": 317,
            "y": 386
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 404,
            "y": 354
          },
          {
            "x": 412,
            "y": 354
          },
          {
            "x": 412,
            "y": 386
          },
          {
            "x": 404,
            "y": 386
          }
        ]
      }
    },
    {
      "description": "TX",
      "boundingPoly": {
        "vertices": [
          {
            "x": 433,
            "y": 354
          },
          {
            "x": 456,
            "y": 354
          },
          {
            "x": 456,
            "y": 386
          },
          {
            "x": 433,
            "y": 386
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 161,
            "y": 390
          },
          {
            "x": 169,
            "y": 390
          },
          {
            "x": 169,
            "y": 422
          },
          {
            "x": 161,
            "y": 422
          }
        ]
      }
    },
    {
      "description": "Mobil",
      "boundingPoly": {
        "vertices": [
          {
            "x": 187,
            "y": 390
          },
          {
            "x": 256,
            "y": 390
          },
          {
            "x": 256,
            "y": 422
          },
          {
            "x": 187,
            "y": 422
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 277,
            "y": 390
          },
          {
            "x": 285,
            "y": 390
          },
          {
            "x": 285,
            "y": 422
          },
          {
            "x": 277,
            "y": 422
          }
        ]
      }
    },
    {
      "description": "Synth",
      "boundingPoly": {
        "vertices": [
          {
            "x": 305,
            "y": 390
          },
          {
            "x": 367,
            "y": 390
          },
          {
            "x": 367,
            "y": 422
          },
          {
            "x": 305,
            "y": 422
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 160,
            "y": 426
          },
          {
            "x": 168,
            "y": 426
          },
          {
            "x": 168,
            "y": 457
          },
          {
            "x": 160,
            "y": 457
          }
        ]
      }
    },
    {
      "description": "Supreme",
      "boundingPoly": {
        "vertices": [
          {
            "x": 184,
            "y": 426
          },
          {
            "x": 286,
            "y": 427
          },
          {
            "x": 286,
            "y": 459
          },
          {
            "x": 184,
            "y": 458
          }
        ]
      }
    },
    {
      "description": "Inspection",
      "boundingPoly": {
        "vertices": [
          {
            "x": 303,
            "y": 428
          },
          {
            "x": 441,
            "y": 430
          },
          {
            "x": 441,
            "y": 462
          },
          {
            "x": 303,
            "y": 460
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 161,
            "y": 461
          },
          {
            "x": 169,
            "y": 461
          },
          {
            "x": 169,
            "y": 492
          },
          {
            "x": 161,
            "y": 492
          }
        ]
      }
    },
    {
      "description": "Waste",
      "boundingPoly": {
        "vertices": [
          {
            "x": 180,
            "y": 461
          },
          {
            "x": 258,
            "y": 461
          },
          {
            "x": 258,
            "y": 492
          },
          {
            "x": 180,
            "y": 492
          }
        ]
      }
    },
    {
      "description": "Fee",
      "boundingPoly": {
        "vertices": [
          {
            "x": 271,
            "y": 461
          },
          {
            "x": 316,
            "y": 461
          },
          {
            "x": 316,
            "y": 492
          },
          {
            "x": 271,
            "y": 492
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 159,
            "y": 494
          },
          {
            "x": 168,
            "y": 494
          },
          {
            "x": 168,
            "y": 528
          },
          {
            "x": 159,
            "y": 528
          }
        ]
      }
    },
    {
      "description": "Lube",
      "boundingPoly": {
        "vertices": [
          {
            "x": 200,
            "y": 494
          },
          {
            "x": 258,
            "y": 494
          },
          {
            "x": 258,
            "y": 528
          },
          {
            "x": 200,
            "y": 528
          }
        ]
      }
    },
    {
      "description": "Wash",
      "boundingPoly": {
        "vertices": [
          {
            "x": 269,
            "y": 494
          },
          {
            "x": 327,
            "y": 494
          },
          {
            "x": 327,
            "y": 528
          },
          {
            "x": 269,
            "y": 528
          }
        ]
      }
    },
    {
      "description": "Discount",
      "boundingPoly": {
        "vertices": [
          {
            "x": 346,
            "y": 494
          },
          {
            "x": 461,
            "y": 494
          },
          {
            "x": 461,
            "y": 528
          },
          {
            "x": 346,
            "y": 528
          }
        ]
      }
    },
    {
      "description": "5",
      "boundingPoly": {
        "vertices": [
          {
            "x": 108,
            "y": 532
          },
          {
            "x": 116,
            "y": 532
          },
          {
            "x": 116,
            "y": 564
          },
          {
            "x": 108,
            "y": 564
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 128,
            "y": 532
          },
          {
            "x": 136,
            "y": 532
          },
          {
            "x": 136,
            "y": 564
          },
          {
            "x": 128,
            "y": 564
          }
        ]
      }
    },
    {
      "description": "80",
      "boundingPoly": {
        "vertices": [
          {
            "x": 141,
            "y": 532
          },
          {
            "x": 164,
            "y": 532
          },
          {
            "x": 164,
            "y": 564
          },
          {
            "x": 141,
            "y": 564
          }
        ]
      }
    },
    {
      "description": "Mobile",
      "boundingPoly": {
        "vertices": [
          {
            "x": 182,
            "y": 532
          },
          {
            "x": 270,
            "y": 532
          },
          {
            "x": 270,
            "y": 564
          },
          {
            "x": 182,
            "y": 564
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 293,
            "y": 532
          },
          {
            "x": 301,
            "y": 532
          },
          {
            "x": 301,
            "y": 564
          },
          {
            "x": 293,
            "y": 564
          }
        ]
      }
    },
    {
      "description": "Ow40",
      "boundingPoly": {
        "vertices": [
          {
            "x": 319,
            "y": 532
          },
          {
            "x": 372,
            "y": 532
          },
          {
            "x": 372,
            "y": 564
          },
          {
            "x": 319,
            "y": 564
          }
        ]
      }
    },
    {
      "description": "Btl",
      "boundingPoly": {
        "vertices": [
          {
            "x": 390,
            "y": 532
          },
          {
            "x": 436,
            "y": 532
          },
          {
            "x": 436,
            "y": 564
          },
          {
            "x": 390,
            "y": 564
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 160,
            "y": 568
          },
          {
            "x": 168,
            "y": 568
          },
          {
            "x": 168,
            "y": 600
          },
          {
            "x": 160,
            "y": 600
          }
        ]
      }
    },
    {
      "description": "PRGDOF",
      "boundingPoly": {
        "vertices": [
          {
            "x": 185,
            "y": 568
          },
          {
            "x": 269,
            "y": 568
          },
          {
            "x": 269,
            "y": 600
          },
          {
            "x": 185,
            "y": 600
          }
        ]
      }
    },
    {
      "description": ":",
      "boundingPoly": {
        "vertices": [
          {
            "x": 275,
            "y": 568
          },
          {
            "x": 283,
            "y": 568
          },
          {
            "x": 283,
            "y": 600
          },
          {
            "x": 275,
            "y": 600
          }
        ]
      }
    },
    {
      "description": "POF5581",
      "boundingPoly": {
        "vertices": [
          {
            "x": 287,
            "y": 568
          },
          {
            "x": 393,
            "y": 568
          },
          {
            "x": 393,
            "y": 600
          },
          {
            "x": 287,
            "y": 600
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 159,
            "y": 606
          },
          {
            "x": 168,
            "y": 606
          },
          {
            "x": 168,
            "y": 639
          },
          {
            "x": 159,
            "y": 639
          }
        ]
      }
    },
    {
      "description": "Exp",
      "boundingPoly": {
        "vertices": [
          {
            "x": 185,
            "y": 606
          },
          {
            "x": 224,
            "y": 606
          },
          {
            "x": 224,
            "y": 639
          },
          {
            "x": 185,
            "y": 639
          }
        ]
      }
    },
    {
      "description": "Carpet",
      "boundingPoly": {
        "vertices": [
          {
            "x": 242,
            "y": 606
          },
          {
            "x": 329,
            "y": 606
          },
          {
            "x": 329,
            "y": 639
          },
          {
            "x": 242,
            "y": 639
          }
        ]
      }
    },
    {
      "description": "Clean",
      "boundingPoly": {
        "vertices": [
          {
            "x": 348,
            "y": 606
          },
          {
            "x": 417,
            "y": 606
          },
          {
            "x": 417,
            "y": 639
          },
          {
            "x": 348,
            "y": 639
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 157,
            "y": 640
          },
          {
            "x": 167,
            "y": 640
          },
          {
            "x": 167,
            "y": 676
          },
          {
            "x": 157,
            "y": 676
          }
        ]
      }
    },
    {
      "description": "Exp",
      "boundingPoly": {
        "vertices": [
          {
            "x": 182,
            "y": 640
          },
          {
            "x": 223,
            "y": 640
          },
          {
            "x": 223,
            "y": 676
          },
          {
            "x": 182,
            "y": 676
          }
        ]
      }
    },
    {
      "description": "Seat",
      "boundingPoly": {
        "vertices": [
          {
            "x": 245,
            "y": 640
          },
          {
            "x": 301,
            "y": 640
          },
          {
            "x": 301,
            "y": 676
          },
          {
            "x": 245,
            "y": 676
          }
        ]
      }
    },
    {
      "description": "Treat",
      "boundingPoly": {
        "vertices": [
          {
            "x": 319,
            "y": 640
          },
          {
            "x": 390,
            "y": 640
          },
          {
            "x": 390,
            "y": 676
          },
          {
            "x": 319,
            "y": 676
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 157,
            "y": 678
          },
          {
            "x": 166,
            "y": 678
          },
          {
            "x": 166,
            "y": 713
          },
          {
            "x": 157,
            "y": 713
          }
        ]
      }
    },
    {
      "description": "2",
      "boundingPoly": {
        "vertices": [
          {
            "x": 186,
            "y": 678
          },
          {
            "x": 195,
            "y": 678
          },
          {
            "x": 195,
            "y": 713
          },
          {
            "x": 186,
            "y": 713
          }
        ]
      }
    },
    {
      "description": "Detail",
      "boundingPoly": {
        "vertices": [
          {
            "x": 209,
            "y": 678
          },
          {
            "x": 300,
            "y": 678
          },
          {
            "x": 300,
            "y": 713
          },
          {
            "x": 209,
            "y": 713
          }
        ]
      }
    },
    {
      "description": "Disc",
      "boundingPoly": {
        "vertices": [
          {
            "x": 312,
            "y": 678
          },
          {
            "x": 372,
            "y": 678
          },
          {
            "x": 372,
            "y": 713
          },
          {
            "x": 312,
            "y": 713
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 157,
            "y": 715
          },
          {
            "x": 167,
            "y": 715
          },
          {
            "x": 167,
            "y": 751
          },
          {
            "x": 157,
            "y": 751
          }
        ]
      }
    },
    {
      "description": "Emissions",
      "boundingPoly": {
        "vertices": [
          {
            "x": 182,
            "y": 715
          },
          {
            "x": 318,
            "y": 715
          },
          {
            "x": 318,
            "y": 751
          },
          {
            "x": 182,
            "y": 751
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 335,
            "y": 715
          },
          {
            "x": 345,
            "y": 715
          },
          {
            "x": 345,
            "y": 751
          },
          {
            "x": 335,
            "y": 751
          }
        ]
      }
    },
    {
      "description": "OBD",
      "boundingPoly": {
        "vertices": [
          {
            "x": 363,
            "y": 715
          },
          {
            "x": 405,
            "y": 715
          },
          {
            "x": 405,
            "y": 751
          },
          {
            "x": 363,
            "y": 751
          }
        ]
      }
    },
    {
      "description": "1",
      "boundingPoly": {
        "vertices": [
          {
            "x": 152,
            "y": 754
          },
          {
            "x": 162,
            "y": 754
          },
          {
            "x": 162,
            "y": 792
          },
          {
            "x": 152,
            "y": 792
          }
        ]
      }
    },
    {
      "description": "Sticker",
      "boundingPoly": {
        "vertices": [
          {
            "x": 178,
            "y": 754
          },
          {
            "x": 284,
            "y": 754
          },
          {
            "x": 284,
            "y": 792
          },
          {
            "x": 178,
            "y": 792
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 304,
            "y": 754
          },
          {
            "x": 314,
            "y": 754
          },
          {
            "x": 314,
            "y": 792
          },
          {
            "x": 304,
            "y": 792
          }
        ]
      }
    },
    {
      "description": "ODB",
      "boundingPoly": {
        "vertices": [
          {
            "x": 337,
            "y": 754
          },
          {
            "x": 375,
            "y": 754
          },
          {
            "x": 375,
            "y": 792
          },
          {
            "x": 337,
            "y": 792
          }
        ]
      }
    },
    {
      "description": "2",
      "boundingPoly": {
        "vertices": [
          {
            "x": 579,
            "y": 460
          },
          {
            "x": 587,
            "y": 460
          },
          {
            "x": 587,
            "y": 492
          },
          {
            "x": 579,
            "y": 492
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 596,
            "y": 460
          },
          {
            "x": 604,
            "y": 460
          },
          {
            "x": 604,
            "y": 492
          },
          {
            "x": 596,
            "y": 492
          }
        ]
      }
    },
    {
      "description": "00",
      "boundingPoly": {
        "vertices": [
          {
            "x": 608,
            "y": 460
          },
          {
            "x": 631,
            "y": 460
          },
          {
            "x": 631,
            "y": 492
          },
          {
            "x": 608,
            "y": 492
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 565,
            "y": 496
          },
          {
            "x": 573,
            "y": 496
          },
          {
            "x": 573,
            "y": 528
          },
          {
            "x": 565,
            "y": 528
          }
        ]
      }
    },
    {
      "description": "6",
      "boundingPoly": {
        "vertices": [
          {
            "x": 578,
            "y": 496
          },
          {
            "x": 586,
            "y": 496
          },
          {
            "x": 586,
            "y": 528
          },
          {
            "x": 578,
            "y": 528
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 595,
            "y": 496
          },
          {
            "x": 603,
            "y": 496
          },
          {
            "x": 603,
            "y": 528
          },
          {
            "x": 595,
            "y": 528
          }
        ]
      }
    },
    {
      "description": "00",
      "boundingPoly": {
        "vertices": [
          {
            "x": 607,
            "y": 496
          },
          {
            "x": 631,
            "y": 496
          },
          {
            "x": 631,
            "y": 528
          },
          {
            "x": 607,
            "y": 528
          }
        ]
      }
    },
    {
      "description": "10",
      "boundingPoly": {
        "vertices": [
          {
            "x": 567,
            "y": 532
          },
          {
            "x": 591,
            "y": 532
          },
          {
            "x": 591,
            "y": 564
          },
          {
            "x": 567,
            "y": 564
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 598,
            "y": 532
          },
          {
            "x": 606,
            "y": 532
          },
          {
            "x": 606,
            "y": 564
          },
          {
            "x": 598,
            "y": 564
          }
        ]
      }
    },
    {
      "description": "00",
      "boundingPoly": {
        "vertices": [
          {
            "x": 610,
            "y": 532
          },
          {
            "x": 634,
            "y": 532
          },
          {
            "x": 634,
            "y": 564
          },
          {
            "x": 610,
            "y": 564
          }
        ]
      }
    },
    {
      "description": "0",
      "boundingPoly": {
        "vertices": [
          {
            "x": 583,
            "y": 568
          },
          {
            "x": 591,
            "y": 568
          },
          {
            "x": 591,
            "y": 598
          },
          {
            "x": 583,
            "y": 598
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 598,
            "y": 568
          },
          {
            "x": 606,
            "y": 568
          },
          {
            "x": 606,
            "y": 598
          },
          {
            "x": 598,
            "y": 598
          }
        ]
      }
    },
    {
      "description": "00",
      "boundingPoly": {
        "vertices": [
          {
            "x": 613,
            "y": 568
          },
          {
            "x": 634,
            "y": 568
          },
          {
            "x": 634,
            "y": 598
          },
          {
            "x": 613,
            "y": 598
          }
        ]
      }
    },
    {
      "description": "39",
      "boundingPoly": {
        "vertices": [
          {
            "x": 568,
            "y": 602
          },
          {
            "x": 594,
            "y": 602
          },
          {
            "x": 594,
            "y": 637
          },
          {
            "x": 568,
            "y": 637
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 602,
            "y": 602
          },
          {
            "x": 611,
            "y": 602
          },
          {
            "x": 611,
            "y": 637
          },
          {
            "x": 602,
            "y": 637
          }
        ]
      }
    },
    {
      "description": "99",
      "boundingPoly": {
        "vertices": [
          {
            "x": 615,
            "y": 602
          },
          {
            "x": 641,
            "y": 602
          },
          {
            "x": 641,
            "y": 637
          },
          {
            "x": 615,
            "y": 637
          }
        ]
      }
    },
    {
      "description": "39",
      "boundingPoly": {
        "vertices": [
          {
            "x": 571,
            "y": 637
          },
          {
            "x": 602,
            "y": 639
          },
          {
            "x": 600,
            "y": 673
          },
          {
            "x": 569,
            "y": 671
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 605,
            "y": 638
          },
          {
            "x": 614,
            "y": 638
          },
          {
            "x": 612,
            "y": 672
          },
          {
            "x": 603,
            "y": 672
          }
        ]
      }
    },
    {
      "description": "99",
      "boundingPoly": {
        "vertices": [
          {
            "x": 617,
            "y": 639
          },
          {
            "x": 648,
            "y": 641
          },
          {
            "x": 646,
            "y": 675
          },
          {
            "x": 615,
            "y": 673
          }
        ]
      }
    },
    {
      "description": "-",
      "boundingPoly": {
        "vertices": [
          {
            "x": 558,
            "y": 676
          },
          {
            "x": 568,
            "y": 676
          },
          {
            "x": 568,
            "y": 712
          },
          {
            "x": 558,
            "y": 712
          }
        ]
      }
    },
    {
      "description": "19",
      "boundingPoly": {
        "vertices": [
          {
            "x": 578,
            "y": 676
          },
          {
            "x": 597,
            "y": 676
          },
          {
            "x": 597,
            "y": 712
          },
          {
            "x": 578,
            "y": 712
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 606,
            "y": 676
          },
          {
            "x": 616,
            "y": 676
          },
          {
            "x": 616,
            "y": 712
          },
          {
            "x": 606,
            "y": 712
          }
        ]
      }
    },
    {
      "description": "99",
      "boundingPoly": {
        "vertices": [
          {
            "x": 620,
            "y": 676
          },
          {
            "x": 647,
            "y": 676
          },
          {
            "x": 647,
            "y": 712
          },
          {
            "x": 620,
            "y": 712
          }
        ]
      }
    },
    {
      "description": "25",
      "boundingPoly": {
        "vertices": [
          {
            "x": 578,
            "y": 713
          },
          {
            "x": 599,
            "y": 713
          },
          {
            "x": 599,
            "y": 752
          },
          {
            "x": 578,
            "y": 752
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 609,
            "y": 713
          },
          {
            "x": 620,
            "y": 713
          },
          {
            "x": 620,
            "y": 752
          },
          {
            "x": 609,
            "y": 752
          }
        ]
      }
    },
    {
      "description": "50",
      "boundingPoly": {
        "vertices": [
          {
            "x": 620,
            "y": 713
          },
          {
            "x": 649,
            "y": 713
          },
          {
            "x": 649,
            "y": 752
          },
          {
            "x": 620,
            "y": 752
          }
        ]
      }
    },
    {
      "description": "0",
      "boundingPoly": {
        "vertices": [
          {
            "x": 593,
            "y": 754
          },
          {
            "x": 603,
            "y": 754
          },
          {
            "x": 603,
            "y": 791
          },
          {
            "x": 593,
            "y": 791
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 612,
            "y": 754
          },
          {
            "x": 622,
            "y": 754
          },
          {
            "x": 622,
            "y": 791
          },
          {
            "x": 612,
            "y": 791
          }
        ]
      }
    },
    {
      "description": "00",
      "boundingPoly": {
        "vertices": [
          {
            "x": 623,
            "y": 754
          },
          {
            "x": 650,
            "y": 754
          },
          {
            "x": 650,
            "y": 791
          },
          {
            "x": 623,
            "y": 791
          }
        ]
      }
    },
    {
      "description": "Subtotal",
      "boundingPoly": {
        "vertices": [
          {
            "x": 365,
            "y": 832
          },
          {
            "x": 491,
            "y": 832
          },
          {
            "x": 491,
            "y": 871
          },
          {
            "x": 365,
            "y": 871
          }
        ]
      }
    },
    {
      "description": "Sales",
      "boundingPoly": {
        "vertices": [
          {
            "x": 350,
            "y": 876
          },
          {
            "x": 425,
            "y": 876
          },
          {
            "x": 425,
            "y": 914
          },
          {
            "x": 350,
            "y": 914
          }
        ]
      }
    },
    {
      "description": "Tax",
      "boundingPoly": {
        "vertices": [
          {
            "x": 443,
            "y": 876
          },
          {
            "x": 486,
            "y": 876
          },
          {
            "x": 486,
            "y": 914
          },
          {
            "x": 443,
            "y": 914
          }
        ]
      }
    },
    {
      "description": "Total",
      "boundingPoly": {
        "vertices": [
          {
            "x": 412,
            "y": 916
          },
          {
            "x": 491,
            "y": 916
          },
          {
            "x": 491,
            "y": 956
          },
          {
            "x": 412,
            "y": 956
          }
        ]
      }
    },
    {
      "description": "159",
      "boundingPoly": {
        "vertices": [
          {
            "x": 572,
            "y": 834
          },
          {
            "x": 612,
            "y": 836
          },
          {
            "x": 611,
            "y": 867
          },
          {
            "x": 571,
            "y": 865
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 616,
            "y": 836
          },
          {
            "x": 624,
            "y": 836
          },
          {
            "x": 623,
            "y": 867
          },
          {
            "x": 615,
            "y": 867
          }
        ]
      }
    },
    {
      "description": "48",
      "boundingPoly": {
        "vertices": [
          {
            "x": 631,
            "y": 836
          },
          {
            "x": 654,
            "y": 837
          },
          {
            "x": 653,
            "y": 868
          },
          {
            "x": 630,
            "y": 867
          }
        ]
      }
    },
    {
      "description": "5",
      "boundingPoly": {
        "vertices": [
          {
            "x": 602,
            "y": 876
          },
          {
            "x": 611,
            "y": 876
          },
          {
            "x": 611,
            "y": 911
          },
          {
            "x": 602,
            "y": 911
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 620,
            "y": 876
          },
          {
            "x": 629,
            "y": 876
          },
          {
            "x": 629,
            "y": 911
          },
          {
            "x": 620,
            "y": 911
          }
        ]
      }
    },
    {
      "description": "34",
      "boundingPoly": {
        "vertices": [
          {
            "x": 632,
            "y": 876
          },
          {
            "x": 658,
            "y": 876
          },
          {
            "x": 658,
            "y": 911
          },
          {
            "x": 632,
            "y": 911
          }
        ]
      }
    },
    {
      "description": "164",
      "boundingPoly": {
        "vertices": [
          {
            "x": 580,
            "y": 916
          },
          {
            "x": 619,
            "y": 916
          },
          {
            "x": 619,
            "y": 956
          },
          {
            "x": 580,
            "y": 956
          }
        ]
      }
    },
    {
      "description": ".",
      "boundingPoly": {
        "vertices": [
          {
            "x": 623,
            "y": 916
          },
          {
            "x": 634,
            "y": 916
          },
          {
            "x": 634,
            "y": 956
          },
          {
            "x": 623,
            "y": 956
          }
        ]
      }
    },
    {
      "description": "82",
      "boundingPoly": {
        "vertices": [
          {
            "x": 634,
            "y": 916
          },
          {
            "x": 663,
            "y": 916
          },
          {
            "x": 663,
            "y": 956
          },
          {
            "x": 634,
            "y": 956
          }
        ]
      }
    }
  ],
  "safeSearchAnnotation": {
    "adult": "VERY_UNLIKELY",
    "spoof": "VERY_UNLIKELY",
    "medical": "VERY_UNLIKELY",
    "violence": "VERY_UNLIKELY",
    "racy": "VERY_UNLIKELY"
  },
  "imagePropertiesAnnotation": {
    "dominantColors": {
      "colors": [
        {
          "color": {
            "red": 201,
            "green": 196,
            "blue": 186
          },
          "score": 0.3534051,
          "pixelFraction": 0.30932406
        },
        {
          "color": {
            "red": 157,
            "green": 152,
            "blue": 145
          },
          "score": 0.33100244,
          "pixelFraction": 0.40849712
        },
        {
          "color": {
            "red": 124,
            "green": 119,
            "blue": 112
          },
          "score": 0.20690438,
          "pixelFraction": 0.10564478
        },
        {
          "color": {
            "red": 93,
            "green": 88,
            "blue": 82
          },
          "score": 0.081930265,
          "pixelFraction": 0.039549377
        },
        {
          "color": {
            "red": 225,
            "green": 218,
            "blue": 208
          },
          "score": 0.02191919,
          "pixelFraction": 0.11313519
        },
        {
          "color": {
            "red": 61,
            "green": 56,
            "blue": 49
          },
          "score": 0.0047712005,
          "pixelFraction": 0.0035354747
        },
        {
          "color": {
            "red": 35,
            "green": 31,
            "blue": 22
          },
          "score": 0.00006744725,
          "pixelFraction": 0.0000599233
        },
        {
          "color": {
            "red": 249,
            "green": 226,
            "blue": 213
          },
          "score": 1.1900622e-9,
          "pixelFraction": 0.010786193
        },
        {
          "color": {
            "red": 170,
            "green": 149,
            "blue": 137
          },
          "score": 3.7685302e-10,
          "pixelFraction": 0.003415628
        },
        {
          "color": {
            "red": 217,
            "green": 192,
            "blue": 181
          },
          "score": 2.4462388e-10,
          "pixelFraction": 0.002217162
        }
      ]
    }
  },
  "cropHintsAnnotation": {
    "cropHints": [
      {
        "boundingPoly": {
          "vertices": [
            {},
            {
              "x": 749
            },
            {
              "x": 749,
              "y": 939
            },
            {
              "y": 939
            }
          ]
        },
        "confidence": 0.79999995,
        "importanceFraction": 0.96999997
      },
      {
        "boundingPoly": {
          "vertices": [
            {},
            {
              "x": 749
            },
            {
              "x": 749,
              "y": 759
            },
            {
              "y": 759
            }
          ]
        },
        "confidence": 0.79999995,
        "importanceFraction": 0.88
      },
      {
        "boundingPoly": {
          "vertices": [
            {},
            {
              "x": 749
            },
            {
              "x": 749,
              "y": 629
            },
            {
              "y": 629
            }
          ]
        },
        "confidence": 0.79999995,
        "importanceFraction": 0.81
      }
    ]
  },
  "fullTextAnnotation": {
    "pages": [
      {
        "property": {
          "detectedLanguages": [
            {
              "languageCode": "en",
              "confidence": 0.7
            },
            {
              "languageCode": "no",
              "confidence": 0.03
            },
            {
              "languageCode": "sk",
              "confidence": 0.03
            },
            {
              "languageCode": "id",
              "confidence": 0.03
            }
          ]
        },
        "width": 750,
        "height": 1000,
        "blocks": [
          {
            "boundingBox": {
              "vertices": [
                {
                  "x": 235,
                  "y": 33
                },
                {
                  "x": 479,
                  "y": 33
                },
                {
                  "x": 479,
                  "y": 116
                },
                {
                  "x": 235,
                  "y": 116
                }
              ]
            },
            "paragraphs": [
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 235,
                      "y": 33
                    },
                    {
                      "x": 479,
                      "y": 33
                    },
                    {
                      "x": 479,
                      "y": 84
                    },
                    {
                      "x": 235,
                      "y": 84
                    }
                  ]
                },
                "words": [
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 274,
                          "y": 33
                        },
                        {
                          "x": 313,
                          "y": 33
                        },
                        {
                          "x": 313,
                          "y": 60
                        },
                        {
                          "x": 274,
                          "y": 60
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 274,
                              "y": 33
                            },
                            {
                              "x": 285,
                              "y": 33
                            },
                            {
                              "x": 285,
                              "y": 60
                            },
                            {
                              "x": 274,
                              "y": 60
                            }
                          ]
                        },
                        "text": "C",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 288,
                              "y": 33
                            },
                            {
                              "x": 299,
                              "y": 33
                            },
                            {
                              "x": 299,
                              "y": 60
                            },
                            {
                              "x": 288,
                              "y": 60
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 302,
                              "y": 33
                            },
                            {
                              "x": 313,
                              "y": 33
                            },
                            {
                              "x": 313,
                              "y": 60
                            },
                            {
                              "x": 302,
                              "y": 60
                            }
                          ]
                        },
                        "text": "r",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 332,
                          "y": 33
                        },
                        {
                          "x": 366,
                          "y": 33
                        },
                        {
                          "x": 366,
                          "y": 60
                        },
                        {
                          "x": 332,
                          "y": 60
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 332,
                              "y": 33
                            },
                            {
                              "x": 340,
                              "y": 33
                            },
                            {
                              "x": 340,
                              "y": 60
                            },
                            {
                              "x": 332,
                              "y": 60
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 342,
                              "y": 33
                            },
                            {
                              "x": 352,
                              "y": 33
                            },
                            {
                              "x": 352,
                              "y": 60
                            },
                            {
                              "x": 342,
                              "y": 60
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 355,
                              "y": 33
                            },
                            {
                              "x": 366,
                              "y": 33
                            },
                            {
                              "x": 366,
                              "y": 60
                            },
                            {
                              "x": 355,
                              "y": 60
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 383,
                          "y": 33
                        },
                        {
                          "x": 435,
                          "y": 33
                        },
                        {
                          "x": 435,
                          "y": 60
                        },
                        {
                          "x": 383,
                          "y": 60
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 383,
                              "y": 33
                            },
                            {
                              "x": 394,
                              "y": 33
                            },
                            {
                              "x": 394,
                              "y": 60
                            },
                            {
                              "x": 383,
                              "y": 60
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 397,
                              "y": 33
                            },
                            {
                              "x": 409,
                              "y": 33
                            },
                            {
                              "x": 409,
                              "y": 60
                            },
                            {
                              "x": 397,
                              "y": 60
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 414,
                              "y": 33
                            },
                            {
                              "x": 425,
                              "y": 33
                            },
                            {
                              "x": 425,
                              "y": 60
                            },
                            {
                              "x": 414,
                              "y": 60
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 427,
                              "y": 33
                            },
                            {
                              "x": 435,
                              "y": 33
                            },
                            {
                              "x": 435,
                              "y": 60
                            },
                            {
                              "x": 427,
                              "y": 60
                            }
                          ]
                        },
                        "text": "7",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 235,
                          "y": 60
                        },
                        {
                          "x": 283,
                          "y": 60
                        },
                        {
                          "x": 283,
                          "y": 84
                        },
                        {
                          "x": 235,
                          "y": 84
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 235,
                              "y": 60
                            },
                            {
                              "x": 242,
                              "y": 60
                            },
                            {
                              "x": 242,
                              "y": 84
                            },
                            {
                              "x": 235,
                              "y": 84
                            }
                          ]
                        },
                        "text": "3",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 243,
                              "y": 60
                            },
                            {
                              "x": 253,
                              "y": 60
                            },
                            {
                              "x": 253,
                              "y": 84
                            },
                            {
                              "x": 243,
                              "y": 84
                            }
                          ]
                        },
                        "text": "6",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 260,
                              "y": 60
                            },
                            {
                              "x": 272,
                              "y": 60
                            },
                            {
                              "x": 272,
                              "y": 84
                            },
                            {
                              "x": 260,
                              "y": 84
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 274,
                              "y": 60
                            },
                            {
                              "x": 283,
                              "y": 60
                            },
                            {
                              "x": 283,
                              "y": 84
                            },
                            {
                              "x": 274,
                              "y": 84
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 300,
                          "y": 60
                        },
                        {
                          "x": 409,
                          "y": 60
                        },
                        {
                          "x": 409,
                          "y": 84
                        },
                        {
                          "x": 300,
                          "y": 84
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 300,
                              "y": 60
                            },
                            {
                              "x": 312,
                              "y": 60
                            },
                            {
                              "x": 312,
                              "y": 84
                            },
                            {
                              "x": 300,
                              "y": 84
                            }
                          ]
                        },
                        "text": "B",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 314,
                              "y": 60
                            },
                            {
                              "x": 327,
                              "y": 60
                            },
                            {
                              "x": 327,
                              "y": 84
                            },
                            {
                              "x": 314,
                              "y": 84
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 333,
                              "y": 60
                            },
                            {
                              "x": 343,
                              "y": 60
                            },
                            {
                              "x": 343,
                              "y": 84
                            },
                            {
                              "x": 333,
                              "y": 84
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 343,
                              "y": 60
                            },
                            {
                              "x": 353,
                              "y": 60
                            },
                            {
                              "x": 353,
                              "y": 84
                            },
                            {
                              "x": 343,
                              "y": 84
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.95
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 360,
                              "y": 60
                            },
                            {
                              "x": 372,
                              "y": 60
                            },
                            {
                              "x": 372,
                              "y": 84
                            },
                            {
                              "x": 360,
                              "y": 84
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 374,
                              "y": 60
                            },
                            {
                              "x": 382,
                              "y": 60
                            },
                            {
                              "x": 382,
                              "y": 84
                            },
                            {
                              "x": 374,
                              "y": 84
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 384,
                              "y": 60
                            },
                            {
                              "x": 393,
                              "y": 60
                            },
                            {
                              "x": 393,
                              "y": 84
                            },
                            {
                              "x": 384,
                              "y": 84
                            }
                          ]
                        },
                        "text": "n",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 398,
                              "y": 60
                            },
                            {
                              "x": 409,
                              "y": 60
                            },
                            {
                              "x": 409,
                              "y": 84
                            },
                            {
                              "x": 398,
                              "y": 84
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.98
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 426,
                          "y": 60
                        },
                        {
                          "x": 479,
                          "y": 60
                        },
                        {
                          "x": 479,
                          "y": 84
                        },
                        {
                          "x": 426,
                          "y": 84
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 426,
                              "y": 60
                            },
                            {
                              "x": 436,
                              "y": 60
                            },
                            {
                              "x": 436,
                              "y": 84
                            },
                            {
                              "x": 426,
                              "y": 84
                            }
                          ]
                        },
                        "text": "R",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 438,
                              "y": 60
                            },
                            {
                              "x": 448,
                              "y": 60
                            },
                            {
                              "x": 448,
                              "y": 84
                            },
                            {
                              "x": 438,
                              "y": 84
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 453,
                              "y": 60
                            },
                            {
                              "x": 464,
                              "y": 60
                            },
                            {
                              "x": 464,
                              "y": 84
                            },
                            {
                              "x": 453,
                              "y": 84
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 468,
                              "y": 60
                            },
                            {
                              "x": 479,
                              "y": 60
                            },
                            {
                              "x": 479,
                              "y": 84
                            },
                            {
                              "x": 468,
                              "y": 84
                            }
                          ]
                        },
                        "text": "d",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.99
              },
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 265,
                      "y": 89
                    },
                    {
                      "x": 453,
                      "y": 89
                    },
                    {
                      "x": 453,
                      "y": 116
                    },
                    {
                      "x": 265,
                      "y": 116
                    }
                  ]
                },
                "words": [
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 265,
                          "y": 89
                        },
                        {
                          "x": 272,
                          "y": 89
                        },
                        {
                          "x": 272,
                          "y": 116
                        },
                        {
                          "x": 265,
                          "y": 116
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 265,
                              "y": 89
                            },
                            {
                              "x": 272,
                              "y": 89
                            },
                            {
                              "x": 272,
                              "y": 116
                            },
                            {
                              "x": 265,
                              "y": 116
                            }
                          ]
                        },
                        "text": "(",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 274,
                          "y": 89
                        },
                        {
                          "x": 313,
                          "y": 89
                        },
                        {
                          "x": 313,
                          "y": 116
                        },
                        {
                          "x": 274,
                          "y": 116
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 274,
                              "y": 89
                            },
                            {
                              "x": 285,
                              "y": 89
                            },
                            {
                              "x": 285,
                              "y": 116
                            },
                            {
                              "x": 274,
                              "y": 116
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 288,
                              "y": 89
                            },
                            {
                              "x": 299,
                              "y": 89
                            },
                            {
                              "x": 299,
                              "y": 116
                            },
                            {
                              "x": 288,
                              "y": 116
                            }
                          ]
                        },
                        "text": "7",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 302,
                              "y": 89
                            },
                            {
                              "x": 313,
                              "y": 89
                            },
                            {
                              "x": 313,
                              "y": 116
                            },
                            {
                              "x": 302,
                              "y": 116
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 318,
                          "y": 89
                        },
                        {
                          "x": 325,
                          "y": 89
                        },
                        {
                          "x": 325,
                          "y": 116
                        },
                        {
                          "x": 318,
                          "y": 116
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 318,
                              "y": 89
                            },
                            {
                              "x": 325,
                              "y": 89
                            },
                            {
                              "x": 325,
                              "y": 116
                            },
                            {
                              "x": 318,
                              "y": 116
                            }
                          ]
                        },
                        "text": ")",
                        "confidence": 1
                      }
                    ],
                    "confidence": 1
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 344,
                          "y": 89
                        },
                        {
                          "x": 383,
                          "y": 89
                        },
                        {
                          "x": 383,
                          "y": 116
                        },
                        {
                          "x": 344,
                          "y": 116
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 344,
                              "y": 89
                            },
                            {
                              "x": 355,
                              "y": 89
                            },
                            {
                              "x": 355,
                              "y": 116
                            },
                            {
                              "x": 344,
                              "y": 116
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 358,
                              "y": 89
                            },
                            {
                              "x": 369,
                              "y": 89
                            },
                            {
                              "x": 369,
                              "y": 116
                            },
                            {
                              "x": 358,
                              "y": 116
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 372,
                              "y": 89
                            },
                            {
                              "x": 383,
                              "y": 89
                            },
                            {
                              "x": 383,
                              "y": 116
                            },
                            {
                              "x": 372,
                              "y": 116
                            }
                          ]
                        },
                        "text": "3",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 388,
                          "y": 89
                        },
                        {
                          "x": 395,
                          "y": 89
                        },
                        {
                          "x": 395,
                          "y": 116
                        },
                        {
                          "x": 388,
                          "y": 116
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 388,
                              "y": 89
                            },
                            {
                              "x": 395,
                              "y": 89
                            },
                            {
                              "x": 395,
                              "y": 116
                            },
                            {
                              "x": 388,
                              "y": 116
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 400,
                          "y": 89
                        },
                        {
                          "x": 453,
                          "y": 89
                        },
                        {
                          "x": 453,
                          "y": 116
                        },
                        {
                          "x": 400,
                          "y": 116
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 400,
                              "y": 89
                            },
                            {
                              "x": 411,
                              "y": 89
                            },
                            {
                              "x": 411,
                              "y": 116
                            },
                            {
                              "x": 400,
                              "y": 116
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 1
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 414,
                              "y": 89
                            },
                            {
                              "x": 425,
                              "y": 89
                            },
                            {
                              "x": 425,
                              "y": 116
                            },
                            {
                              "x": 414,
                              "y": 116
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 428,
                              "y": 89
                            },
                            {
                              "x": 439,
                              "y": 89
                            },
                            {
                              "x": 439,
                              "y": 116
                            },
                            {
                              "x": 428,
                              "y": 116
                            }
                          ]
                        },
                        "text": "3",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 442,
                              "y": 89
                            },
                            {
                              "x": 453,
                              "y": 89
                            },
                            {
                              "x": 453,
                              "y": 116
                            },
                            {
                              "x": 442,
                              "y": 116
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.99
              }
            ],
            "blockType": "TEXT",
            "confidence": 0.99
          },
          {
            "boundingBox": {
              "vertices": [
                {
                  "x": 74,
                  "y": 147
                },
                {
                  "x": 343,
                  "y": 147
                },
                {
                  "x": 343,
                  "y": 216
                },
                {
                  "x": 74,
                  "y": 216
                }
              ]
            },
            "paragraphs": [
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 74,
                      "y": 147
                    },
                    {
                      "x": 343,
                      "y": 147
                    },
                    {
                      "x": 343,
                      "y": 216
                    },
                    {
                      "x": 74,
                      "y": 216
                    }
                  ]
                },
                "words": [
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 77,
                          "y": 147
                        },
                        {
                          "x": 100,
                          "y": 147
                        },
                        {
                          "x": 100,
                          "y": 178
                        },
                        {
                          "x": 77,
                          "y": 178
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 77,
                              "y": 147
                            },
                            {
                              "x": 87,
                              "y": 147
                            },
                            {
                              "x": 87,
                              "y": 178
                            },
                            {
                              "x": 77,
                              "y": 178
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 90,
                              "y": 147
                            },
                            {
                              "x": 100,
                              "y": 147
                            },
                            {
                              "x": 100,
                              "y": 178
                            },
                            {
                              "x": 90,
                              "y": 178
                            }
                          ]
                        },
                        "text": "7",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 103,
                          "y": 147
                        },
                        {
                          "x": 111,
                          "y": 147
                        },
                        {
                          "x": 111,
                          "y": 178
                        },
                        {
                          "x": 103,
                          "y": 178
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 103,
                              "y": 147
                            },
                            {
                              "x": 111,
                              "y": 147
                            },
                            {
                              "x": 111,
                              "y": 178
                            },
                            {
                              "x": 103,
                              "y": 178
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 123,
                          "y": 147
                        },
                        {
                          "x": 200,
                          "y": 147
                        },
                        {
                          "x": 200,
                          "y": 178
                        },
                        {
                          "x": 123,
                          "y": 178
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 123,
                              "y": 147
                            },
                            {
                              "x": 130,
                              "y": 147
                            },
                            {
                              "x": 130,
                              "y": 178
                            },
                            {
                              "x": 123,
                              "y": 178
                            }
                          ]
                        },
                        "text": "T",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 132,
                              "y": 147
                            },
                            {
                              "x": 140,
                              "y": 147
                            },
                            {
                              "x": 140,
                              "y": 178
                            },
                            {
                              "x": 132,
                              "y": 178
                            }
                          ]
                        },
                        "text": "O",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 143,
                              "y": 147
                            },
                            {
                              "x": 154,
                              "y": 147
                            },
                            {
                              "x": 154,
                              "y": 178
                            },
                            {
                              "x": 143,
                              "y": 178
                            }
                          ]
                        },
                        "text": "U",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 159,
                              "y": 147
                            },
                            {
                              "x": 170,
                              "y": 147
                            },
                            {
                              "x": 170,
                              "y": 178
                            },
                            {
                              "x": 159,
                              "y": 178
                            }
                          ]
                        },
                        "text": "C",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 172,
                              "y": 147
                            },
                            {
                              "x": 183,
                              "y": 147
                            },
                            {
                              "x": 183,
                              "y": 178
                            },
                            {
                              "x": 172,
                              "y": 178
                            }
                          ]
                        },
                        "text": "H",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 188,
                              "y": 147
                            },
                            {
                              "x": 200,
                              "y": 147
                            },
                            {
                              "x": 200,
                              "y": 178
                            },
                            {
                              "x": 188,
                              "y": 178
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.38
                      }
                    ],
                    "confidence": 0.88
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 206,
                          "y": 147
                        },
                        {
                          "x": 214,
                          "y": 147
                        },
                        {
                          "x": 214,
                          "y": 178
                        },
                        {
                          "x": 206,
                          "y": 178
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 206,
                              "y": 147
                            },
                            {
                              "x": 214,
                              "y": 147
                            },
                            {
                              "x": 214,
                              "y": 178
                            },
                            {
                              "x": 206,
                              "y": 178
                            }
                          ]
                        },
                        "text": ",",
                        "confidence": 0.71
                      }
                    ],
                    "confidence": 0.71
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 74,
                          "y": 180
                        },
                        {
                          "x": 145,
                          "y": 180
                        },
                        {
                          "x": 145,
                          "y": 215
                        },
                        {
                          "x": 74,
                          "y": 215
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 74,
                              "y": 180
                            },
                            {
                              "x": 85,
                              "y": 180
                            },
                            {
                              "x": 85,
                              "y": 214
                            },
                            {
                              "x": 74,
                              "y": 214
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 87,
                              "y": 180
                            },
                            {
                              "x": 100,
                              "y": 180
                            },
                            {
                              "x": 100,
                              "y": 214
                            },
                            {
                              "x": 87,
                              "y": 214
                            }
                          ]
                        },
                        "text": "h",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 105,
                              "y": 180
                            },
                            {
                              "x": 117,
                              "y": 180
                            },
                            {
                              "x": 117,
                              "y": 214
                            },
                            {
                              "x": 105,
                              "y": 214
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 120,
                              "y": 180
                            },
                            {
                              "x": 131,
                              "y": 180
                            },
                            {
                              "x": 131,
                              "y": 214
                            },
                            {
                              "x": 120,
                              "y": 214
                            }
                          ]
                        },
                        "text": "f",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 134,
                              "y": 181
                            },
                            {
                              "x": 145,
                              "y": 181
                            },
                            {
                              "x": 145,
                              "y": 215
                            },
                            {
                              "x": 134,
                              "y": 215
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.98
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 163,
                          "y": 181
                        },
                        {
                          "x": 172,
                          "y": 181
                        },
                        {
                          "x": 172,
                          "y": 215
                        },
                        {
                          "x": 163,
                          "y": 215
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 163,
                              "y": 181
                            },
                            {
                              "x": 172,
                              "y": 181
                            },
                            {
                              "x": 172,
                              "y": 215
                            },
                            {
                              "x": 163,
                              "y": 215
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.96
                      }
                    ],
                    "confidence": 0.96
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 177,
                          "y": 181
                        },
                        {
                          "x": 186,
                          "y": 181
                        },
                        {
                          "x": 186,
                          "y": 215
                        },
                        {
                          "x": 177,
                          "y": 215
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 177,
                              "y": 181
                            },
                            {
                              "x": 186,
                              "y": 181
                            },
                            {
                              "x": 186,
                              "y": 215
                            },
                            {
                              "x": 177,
                              "y": 215
                            }
                          ]
                        },
                        "text": ",",
                        "confidence": 0.56
                      }
                    ],
                    "confidence": 0.56
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 205,
                          "y": 181
                        },
                        {
                          "x": 262,
                          "y": 181
                        },
                        {
                          "x": 262,
                          "y": 215
                        },
                        {
                          "x": 205,
                          "y": 215
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 205,
                              "y": 181
                            },
                            {
                              "x": 213,
                              "y": 181
                            },
                            {
                              "x": 213,
                              "y": 215
                            },
                            {
                              "x": 205,
                              "y": 215
                            }
                          ]
                        },
                        "text": "E",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 214,
                              "y": 181
                            },
                            {
                              "x": 225,
                              "y": 181
                            },
                            {
                              "x": 225,
                              "y": 215
                            },
                            {
                              "x": 214,
                              "y": 215
                            }
                          ]
                        },
                        "text": "m",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 231,
                              "y": 181
                            },
                            {
                              "x": 244,
                              "y": 181
                            },
                            {
                              "x": 244,
                              "y": 215
                            },
                            {
                              "x": 231,
                              "y": 215
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 248,
                              "y": 181
                            },
                            {
                              "x": 262,
                              "y": 181
                            },
                            {
                              "x": 262,
                              "y": 215
                            },
                            {
                              "x": 248,
                              "y": 215
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 274,
                          "y": 181
                        },
                        {
                          "x": 327,
                          "y": 181
                        },
                        {
                          "x": 327,
                          "y": 216
                        },
                        {
                          "x": 274,
                          "y": 216
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 274,
                              "y": 181
                            },
                            {
                              "x": 285,
                              "y": 181
                            },
                            {
                              "x": 285,
                              "y": 215
                            },
                            {
                              "x": 274,
                              "y": 215
                            }
                          ]
                        },
                        "text": "6",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 288,
                              "y": 182
                            },
                            {
                              "x": 299,
                              "y": 182
                            },
                            {
                              "x": 299,
                              "y": 216
                            },
                            {
                              "x": 288,
                              "y": 216
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 302,
                              "y": 182
                            },
                            {
                              "x": 313,
                              "y": 182
                            },
                            {
                              "x": 313,
                              "y": 216
                            },
                            {
                              "x": 302,
                              "y": 216
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 316,
                              "y": 182
                            },
                            {
                              "x": 327,
                              "y": 182
                            },
                            {
                              "x": 327,
                              "y": 216
                            },
                            {
                              "x": 316,
                              "y": 216
                            }
                          ]
                        },
                        "text": "8",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 334,
                          "y": 182
                        },
                        {
                          "x": 343,
                          "y": 182
                        },
                        {
                          "x": 343,
                          "y": 216
                        },
                        {
                          "x": 334,
                          "y": 216
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 334,
                              "y": 182
                            },
                            {
                              "x": 343,
                              "y": 182
                            },
                            {
                              "x": 343,
                              "y": 216
                            },
                            {
                              "x": 334,
                              "y": 216
                            }
                          ]
                        },
                        "text": ",",
                        "confidence": 0.83
                      }
                    ],
                    "confidence": 0.83
                  }
                ],
                "confidence": 0.92
              }
            ],
            "blockType": "TEXT",
            "confidence": 0.92
          },
          {
            "boundingBox": {
              "vertices": [
                {
                  "x": 385,
                  "y": 150
                },
                {
                  "x": 638,
                  "y": 150
                },
                {
                  "x": 638,
                  "y": 218
                },
                {
                  "x": 385,
                  "y": 218
                }
              ]
            },
            "paragraphs": [
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 385,
                      "y": 150
                    },
                    {
                      "x": 638,
                      "y": 150
                    },
                    {
                      "x": 638,
                      "y": 218
                    },
                    {
                      "x": 385,
                      "y": 218
                    }
                  ]
                },
                "words": [
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 385,
                          "y": 150
                        },
                        {
                          "x": 408,
                          "y": 150
                        },
                        {
                          "x": 408,
                          "y": 182
                        },
                        {
                          "x": 385,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 385,
                              "y": 150
                            },
                            {
                              "x": 395,
                              "y": 150
                            },
                            {
                              "x": 395,
                              "y": 182
                            },
                            {
                              "x": 385,
                              "y": 182
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 398,
                              "y": 150
                            },
                            {
                              "x": 408,
                              "y": 150
                            },
                            {
                              "x": 408,
                              "y": 182
                            },
                            {
                              "x": 398,
                              "y": 182
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 419,
                          "y": 150
                        },
                        {
                          "x": 427,
                          "y": 150
                        },
                        {
                          "x": 427,
                          "y": 182
                        },
                        {
                          "x": 419,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 419,
                              "y": 150
                            },
                            {
                              "x": 427,
                              "y": 150
                            },
                            {
                              "x": 427,
                              "y": 182
                            },
                            {
                              "x": 419,
                              "y": 182
                            }
                          ]
                        },
                        "text": "/",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 432,
                          "y": 150
                        },
                        {
                          "x": 450,
                          "y": 150
                        },
                        {
                          "x": 450,
                          "y": 182
                        },
                        {
                          "x": 432,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 432,
                              "y": 150
                            },
                            {
                              "x": 440,
                              "y": 150
                            },
                            {
                              "x": 440,
                              "y": 182
                            },
                            {
                              "x": 432,
                              "y": 182
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 442,
                              "y": 150
                            },
                            {
                              "x": 450,
                              "y": 150
                            },
                            {
                              "x": 450,
                              "y": 182
                            },
                            {
                              "x": 442,
                              "y": 182
                            }
                          ]
                        },
                        "text": "8",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 458,
                          "y": 150
                        },
                        {
                          "x": 466,
                          "y": 150
                        },
                        {
                          "x": 466,
                          "y": 182
                        },
                        {
                          "x": 458,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 458,
                              "y": 150
                            },
                            {
                              "x": 466,
                              "y": 150
                            },
                            {
                              "x": 466,
                              "y": 182
                            },
                            {
                              "x": 458,
                              "y": 182
                            }
                          ]
                        },
                        "text": "/",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 475,
                          "y": 150
                        },
                        {
                          "x": 493,
                          "y": 150
                        },
                        {
                          "x": 493,
                          "y": 182
                        },
                        {
                          "x": 475,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 475,
                              "y": 150
                            },
                            {
                              "x": 483,
                              "y": 150
                            },
                            {
                              "x": 483,
                              "y": 182
                            },
                            {
                              "x": 475,
                              "y": 182
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 485,
                              "y": 150
                            },
                            {
                              "x": 493,
                              "y": 150
                            },
                            {
                              "x": 493,
                              "y": 182
                            },
                            {
                              "x": 485,
                              "y": 182
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 501,
                          "y": 150
                        },
                        {
                          "x": 509,
                          "y": 150
                        },
                        {
                          "x": 509,
                          "y": 182
                        },
                        {
                          "x": 501,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 501,
                              "y": 150
                            },
                            {
                              "x": 509,
                              "y": 150
                            },
                            {
                              "x": 509,
                              "y": 182
                            },
                            {
                              "x": 501,
                              "y": 182
                            }
                          ]
                        },
                        "text": ",",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 527,
                          "y": 150
                        },
                        {
                          "x": 550,
                          "y": 150
                        },
                        {
                          "x": 550,
                          "y": 182
                        },
                        {
                          "x": 527,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 527,
                              "y": 150
                            },
                            {
                              "x": 537,
                              "y": 150
                            },
                            {
                              "x": 537,
                              "y": 182
                            },
                            {
                              "x": 527,
                              "y": 182
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 540,
                              "y": 150
                            },
                            {
                              "x": 550,
                              "y": 150
                            },
                            {
                              "x": 550,
                              "y": 182
                            },
                            {
                              "x": 540,
                              "y": 182
                            }
                          ]
                        },
                        "text": "6",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 557,
                          "y": 150
                        },
                        {
                          "x": 565,
                          "y": 150
                        },
                        {
                          "x": 565,
                          "y": 182
                        },
                        {
                          "x": 557,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 557,
                              "y": 150
                            },
                            {
                              "x": 565,
                              "y": 150
                            },
                            {
                              "x": 565,
                              "y": 182
                            },
                            {
                              "x": 557,
                              "y": 182
                            }
                          ]
                        },
                        "text": ":",
                        "confidence": 1
                      }
                    ],
                    "confidence": 1
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 570,
                          "y": 150
                        },
                        {
                          "x": 593,
                          "y": 150
                        },
                        {
                          "x": 593,
                          "y": 182
                        },
                        {
                          "x": 570,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 570,
                              "y": 150
                            },
                            {
                              "x": 580,
                              "y": 150
                            },
                            {
                              "x": 580,
                              "y": 182
                            },
                            {
                              "x": 570,
                              "y": 182
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 583,
                              "y": 150
                            },
                            {
                              "x": 593,
                              "y": 150
                            },
                            {
                              "x": 593,
                              "y": 182
                            },
                            {
                              "x": 583,
                              "y": 182
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 607,
                          "y": 150
                        },
                        {
                          "x": 637,
                          "y": 150
                        },
                        {
                          "x": 637,
                          "y": 182
                        },
                        {
                          "x": 607,
                          "y": 182
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 607,
                              "y": 150
                            },
                            {
                              "x": 620,
                              "y": 150
                            },
                            {
                              "x": 620,
                              "y": 182
                            },
                            {
                              "x": 607,
                              "y": 182
                            }
                          ]
                        },
                        "text": "P",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 624,
                              "y": 150
                            },
                            {
                              "x": 637,
                              "y": 150
                            },
                            {
                              "x": 637,
                              "y": 182
                            },
                            {
                              "x": 624,
                              "y": 182
                            }
                          ]
                        },
                        "text": "M",
                        "confidence": 0.98
                      }
                    ],
                    "confidence": 0.98
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 389,
                          "y": 182
                        },
                        {
                          "x": 441,
                          "y": 182
                        },
                        {
                          "x": 441,
                          "y": 217
                        },
                        {
                          "x": 389,
                          "y": 217
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 389,
                              "y": 182
                            },
                            {
                              "x": 400,
                              "y": 182
                            },
                            {
                              "x": 400,
                              "y": 216
                            },
                            {
                              "x": 389,
                              "y": 216
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 402,
                              "y": 182
                            },
                            {
                              "x": 415,
                              "y": 182
                            },
                            {
                              "x": 415,
                              "y": 216
                            },
                            {
                              "x": 402,
                              "y": 216
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 421,
                              "y": 183
                            },
                            {
                              "x": 431,
                              "y": 183
                            },
                            {
                              "x": 431,
                              "y": 217
                            },
                            {
                              "x": 421,
                              "y": 217
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 432,
                              "y": 183
                            },
                            {
                              "x": 441,
                              "y": 183
                            },
                            {
                              "x": 441,
                              "y": 217
                            },
                            {
                              "x": 432,
                              "y": 217
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 0.98
                      }
                    ],
                    "confidence": 0.97
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 457,
                          "y": 183
                        },
                        {
                          "x": 466,
                          "y": 183
                        },
                        {
                          "x": 466,
                          "y": 217
                        },
                        {
                          "x": 457,
                          "y": 217
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 457,
                              "y": 183
                            },
                            {
                              "x": 466,
                              "y": 183
                            },
                            {
                              "x": 466,
                              "y": 217
                            },
                            {
                              "x": 457,
                              "y": 217
                            }
                          ]
                        },
                        "text": "#",
                        "confidence": 0.94
                      }
                    ],
                    "confidence": 0.94
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 486,
                          "y": 183
                        },
                        {
                          "x": 638,
                          "y": 184
                        },
                        {
                          "x": 638,
                          "y": 218
                        },
                        {
                          "x": 486,
                          "y": 217
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 486,
                              "y": 183
                            },
                            {
                              "x": 500,
                              "y": 183
                            },
                            {
                              "x": 500,
                              "y": 217
                            },
                            {
                              "x": 486,
                              "y": 217
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 506,
                              "y": 183
                            },
                            {
                              "x": 515,
                              "y": 183
                            },
                            {
                              "x": 515,
                              "y": 217
                            },
                            {
                              "x": 506,
                              "y": 217
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 513,
                              "y": 183
                            },
                            {
                              "x": 522,
                              "y": 183
                            },
                            {
                              "x": 522,
                              "y": 217
                            },
                            {
                              "x": 513,
                              "y": 217
                            }
                          ]
                        },
                        "text": "6",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 528,
                              "y": 183
                            },
                            {
                              "x": 541,
                              "y": 183
                            },
                            {
                              "x": 541,
                              "y": 217
                            },
                            {
                              "x": 528,
                              "y": 217
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 543,
                              "y": 183
                            },
                            {
                              "x": 554,
                              "y": 183
                            },
                            {
                              "x": 554,
                              "y": 217
                            },
                            {
                              "x": 543,
                              "y": 217
                            }
                          ]
                        },
                        "text": "3",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 557,
                              "y": 183
                            },
                            {
                              "x": 568,
                              "y": 183
                            },
                            {
                              "x": 568,
                              "y": 217
                            },
                            {
                              "x": 557,
                              "y": 217
                            }
                          ]
                        },
                        "text": "6",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 571,
                              "y": 184
                            },
                            {
                              "x": 582,
                              "y": 184
                            },
                            {
                              "x": 582,
                              "y": 218
                            },
                            {
                              "x": 571,
                              "y": 218
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 585,
                              "y": 184
                            },
                            {
                              "x": 596,
                              "y": 184
                            },
                            {
                              "x": 596,
                              "y": 218
                            },
                            {
                              "x": 585,
                              "y": 218
                            }
                          ]
                        },
                        "text": "8",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 599,
                              "y": 184
                            },
                            {
                              "x": 610,
                              "y": 184
                            },
                            {
                              "x": 610,
                              "y": 218
                            },
                            {
                              "x": 599,
                              "y": 218
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 613,
                              "y": 184
                            },
                            {
                              "x": 624,
                              "y": 184
                            },
                            {
                              "x": 624,
                              "y": 218
                            },
                            {
                              "x": 613,
                              "y": 218
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 627,
                              "y": 184
                            },
                            {
                              "x": 638,
                              "y": 184
                            },
                            {
                              "x": 638,
                              "y": 218
                            },
                            {
                              "x": 627,
                              "y": 218
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.98
              }
            ],
            "blockType": "TEXT",
            "confidence": 0.98
          },
          {
            "boundingBox": {
              "vertices": [
                {
                  "x": 559,
                  "y": 252
                },
                {
                  "x": 627,
                  "y": 252
                },
                {
                  "x": 627,
                  "y": 425
                },
                {
                  "x": 559,
                  "y": 425
                }
              ]
            },
            "paragraphs": [
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 562,
                      "y": 252
                    },
                    {
                      "x": 625,
                      "y": 252
                    },
                    {
                      "x": 625,
                      "y": 352
                    },
                    {
                      "x": 562,
                      "y": 352
                    }
                  ]
                },
                "words": [
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 573,
                          "y": 252
                        },
                        {
                          "x": 581,
                          "y": 252
                        },
                        {
                          "x": 581,
                          "y": 282
                        },
                        {
                          "x": 573,
                          "y": 282
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 573,
                              "y": 252
                            },
                            {
                              "x": 581,
                              "y": 252
                            },
                            {
                              "x": 581,
                              "y": 282
                            },
                            {
                              "x": 573,
                              "y": 282
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 588,
                          "y": 252
                        },
                        {
                          "x": 596,
                          "y": 252
                        },
                        {
                          "x": 596,
                          "y": 282
                        },
                        {
                          "x": 588,
                          "y": 282
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 588,
                              "y": 252
                            },
                            {
                              "x": 596,
                              "y": 252
                            },
                            {
                              "x": 596,
                              "y": 282
                            },
                            {
                              "x": 588,
                              "y": 282
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 599,
                          "y": 252
                        },
                        {
                          "x": 621,
                          "y": 252
                        },
                        {
                          "x": 621,
                          "y": 282
                        },
                        {
                          "x": 599,
                          "y": 282
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 599,
                              "y": 252
                            },
                            {
                              "x": 609,
                              "y": 252
                            },
                            {
                              "x": 609,
                              "y": 282
                            },
                            {
                              "x": 599,
                              "y": 282
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 612,
                              "y": 252
                            },
                            {
                              "x": 621,
                              "y": 252
                            },
                            {
                              "x": 621,
                              "y": 282
                            },
                            {
                              "x": 612,
                              "y": 282
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 574,
                          "y": 286
                        },
                        {
                          "x": 582,
                          "y": 286
                        },
                        {
                          "x": 582,
                          "y": 318
                        },
                        {
                          "x": 574,
                          "y": 318
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 574,
                              "y": 286
                            },
                            {
                              "x": 582,
                              "y": 286
                            },
                            {
                              "x": 582,
                              "y": 318
                            },
                            {
                              "x": 574,
                              "y": 318
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 590,
                          "y": 286
                        },
                        {
                          "x": 598,
                          "y": 286
                        },
                        {
                          "x": 598,
                          "y": 318
                        },
                        {
                          "x": 590,
                          "y": 318
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 590,
                              "y": 286
                            },
                            {
                              "x": 598,
                              "y": 286
                            },
                            {
                              "x": 598,
                              "y": 318
                            },
                            {
                              "x": 590,
                              "y": 318
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 599,
                          "y": 286
                        },
                        {
                          "x": 622,
                          "y": 286
                        },
                        {
                          "x": 622,
                          "y": 318
                        },
                        {
                          "x": 599,
                          "y": 318
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 599,
                              "y": 286
                            },
                            {
                              "x": 609,
                              "y": 286
                            },
                            {
                              "x": 609,
                              "y": 318
                            },
                            {
                              "x": 599,
                              "y": 318
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 612,
                              "y": 286
                            },
                            {
                              "x": 622,
                              "y": 286
                            },
                            {
                              "x": 622,
                              "y": 318
                            },
                            {
                              "x": 612,
                              "y": 318
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 1
                      }
                    ],
                    "confidence": 1
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 562,
                          "y": 320
                        },
                        {
                          "x": 586,
                          "y": 320
                        },
                        {
                          "x": 586,
                          "y": 352
                        },
                        {
                          "x": 562,
                          "y": 352
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 562,
                              "y": 320
                            },
                            {
                              "x": 572,
                              "y": 320
                            },
                            {
                              "x": 572,
                              "y": 352
                            },
                            {
                              "x": 562,
                              "y": 352
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 575,
                              "y": 320
                            },
                            {
                              "x": 586,
                              "y": 320
                            },
                            {
                              "x": 586,
                              "y": 352
                            },
                            {
                              "x": 575,
                              "y": 352
                            }
                          ]
                        },
                        "text": "3",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 590,
                          "y": 320
                        },
                        {
                          "x": 598,
                          "y": 320
                        },
                        {
                          "x": 598,
                          "y": 352
                        },
                        {
                          "x": 590,
                          "y": 352
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 590,
                              "y": 320
                            },
                            {
                              "x": 598,
                              "y": 320
                            },
                            {
                              "x": 598,
                              "y": 352
                            },
                            {
                              "x": 590,
                              "y": 352
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 602,
                          "y": 320
                        },
                        {
                          "x": 625,
                          "y": 320
                        },
                        {
                          "x": 625,
                          "y": 352
                        },
                        {
                          "x": 602,
                          "y": 352
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 602,
                              "y": 320
                            },
                            {
                              "x": 612,
                              "y": 320
                            },
                            {
                              "x": 612,
                              "y": 352
                            },
                            {
                              "x": 602,
                              "y": 352
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 615,
                              "y": 320
                            },
                            {
                              "x": 625,
                              "y": 320
                            },
                            {
                              "x": 625,
                              "y": 352
                            },
                            {
                              "x": 615,
                              "y": 352
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.99
              },
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 559,
                      "y": 358
                    },
                    {
                      "x": 627,
                      "y": 358
                    },
                    {
                      "x": 627,
                      "y": 425
                    },
                    {
                      "x": 559,
                      "y": 425
                    }
                  ]
                },
                "words": [
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 571,
                          "y": 358
                        },
                        {
                          "x": 579,
                          "y": 358
                        },
                        {
                          "x": 579,
                          "y": 389
                        },
                        {
                          "x": 571,
                          "y": 389
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 571,
                              "y": 358
                            },
                            {
                              "x": 579,
                              "y": 358
                            },
                            {
                              "x": 579,
                              "y": 389
                            },
                            {
                              "x": 571,
                              "y": 389
                            }
                          ]
                        },
                        "text": "6",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 591,
                          "y": 358
                        },
                        {
                          "x": 599,
                          "y": 358
                        },
                        {
                          "x": 599,
                          "y": 389
                        },
                        {
                          "x": 591,
                          "y": 389
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 591,
                              "y": 358
                            },
                            {
                              "x": 599,
                              "y": 358
                            },
                            {
                              "x": 599,
                              "y": 389
                            },
                            {
                              "x": 591,
                              "y": 389
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 602,
                          "y": 358
                        },
                        {
                          "x": 624,
                          "y": 358
                        },
                        {
                          "x": 624,
                          "y": 389
                        },
                        {
                          "x": 602,
                          "y": 389
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 602,
                              "y": 358
                            },
                            {
                              "x": 612,
                              "y": 358
                            },
                            {
                              "x": 612,
                              "y": 389
                            },
                            {
                              "x": 602,
                              "y": 389
                            }
                          ]
                        },
                        "text": "7",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 615,
                              "y": 358
                            },
                            {
                              "x": 624,
                              "y": 358
                            },
                            {
                              "x": 624,
                              "y": 389
                            },
                            {
                              "x": 615,
                              "y": 389
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 559,
                          "y": 388
                        },
                        {
                          "x": 587,
                          "y": 388
                        },
                        {
                          "x": 587,
                          "y": 425
                        },
                        {
                          "x": 559,
                          "y": 425
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 559,
                              "y": 388
                            },
                            {
                              "x": 572,
                              "y": 388
                            },
                            {
                              "x": 572,
                              "y": 425
                            },
                            {
                              "x": 559,
                              "y": 425
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 575,
                              "y": 388
                            },
                            {
                              "x": 587,
                              "y": 388
                            },
                            {
                              "x": 587,
                              "y": 425
                            },
                            {
                              "x": 575,
                              "y": 425
                            }
                          ]
                        },
                        "text": "8",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 591,
                          "y": 388
                        },
                        {
                          "x": 601,
                          "y": 388
                        },
                        {
                          "x": 601,
                          "y": 425
                        },
                        {
                          "x": 591,
                          "y": 425
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 591,
                              "y": 388
                            },
                            {
                              "x": 601,
                              "y": 388
                            },
                            {
                              "x": 601,
                              "y": 425
                            },
                            {
                              "x": 591,
                              "y": 425
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 607,
                          "y": 388
                        },
                        {
                          "x": 627,
                          "y": 388
                        },
                        {
                          "x": 627,
                          "y": 425
                        },
                        {
                          "x": 607,
                          "y": 425
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 607,
                              "y": 388
                            },
                            {
                              "x": 616,
                              "y": 388
                            },
                            {
                              "x": 616,
                              "y": 425
                            },
                            {
                              "x": 607,
                              "y": 425
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 618,
                              "y": 388
                            },
                            {
                              "x": 627,
                              "y": 388
                            },
                            {
                              "x": 627,
                              "y": 425
                            },
                            {
                              "x": 618,
                              "y": 425
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.99
              }
            ],
            "blockType": "TEXT",
            "confidence": 0.99
          },
          {
            "boundingBox": {
              "vertices": [
                {
                  "x": 108,
                  "y": 250
                },
                {
                  "x": 461,
                  "y": 250
                },
                {
                  "x": 461,
                  "y": 792
                },
                {
                  "x": 108,
                  "y": 792
                }
              ]
            },
            "paragraphs": [
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 160,
                      "y": 250
                    },
                    {
                      "x": 456,
                      "y": 250
                    },
                    {
                      "x": 456,
                      "y": 492
                    },
                    {
                      "x": 160,
                      "y": 492
                    }
                  ]
                },
                "words": [
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "id"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 185,
                          "y": 250
                        },
                        {
                          "x": 256,
                          "y": 250
                        },
                        {
                          "x": 256,
                          "y": 281
                        },
                        {
                          "x": 185,
                          "y": 281
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 185,
                              "y": 250
                            },
                            {
                              "x": 198,
                              "y": 250
                            },
                            {
                              "x": 198,
                              "y": 281
                            },
                            {
                              "x": 185,
                              "y": 281
                            }
                          ]
                        },
                        "text": "M",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 202,
                              "y": 250
                            },
                            {
                              "x": 213,
                              "y": 250
                            },
                            {
                              "x": 213,
                              "y": 281
                            },
                            {
                              "x": 202,
                              "y": 281
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 214,
                              "y": 250
                            },
                            {
                              "x": 226,
                              "y": 250
                            },
                            {
                              "x": 226,
                              "y": 281
                            },
                            {
                              "x": 214,
                              "y": 281
                            }
                          ]
                        },
                        "text": "b",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 233,
                              "y": 250
                            },
                            {
                              "x": 246,
                              "y": 250
                            },
                            {
                              "x": 246,
                              "y": 281
                            },
                            {
                              "x": 233,
                              "y": 281
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 247,
                              "y": 250
                            },
                            {
                              "x": 256,
                              "y": 250
                            },
                            {
                              "x": 256,
                              "y": 281
                            },
                            {
                              "x": 247,
                              "y": 281
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "id"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 277,
                          "y": 250
                        },
                        {
                          "x": 285,
                          "y": 250
                        },
                        {
                          "x": 285,
                          "y": 281
                        },
                        {
                          "x": 277,
                          "y": 281
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 277,
                              "y": 250
                            },
                            {
                              "x": 285,
                              "y": 250
                            },
                            {
                              "x": 285,
                              "y": 281
                            },
                            {
                              "x": 277,
                              "y": 281
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "id"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 302,
                          "y": 250
                        },
                        {
                          "x": 324,
                          "y": 250
                        },
                        {
                          "x": 324,
                          "y": 281
                        },
                        {
                          "x": 302,
                          "y": 281
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 302,
                              "y": 250
                            },
                            {
                              "x": 311,
                              "y": 250
                            },
                            {
                              "x": 311,
                              "y": 281
                            },
                            {
                              "x": 302,
                              "y": 281
                            }
                          ]
                        },
                        "text": "P",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 314,
                              "y": 250
                            },
                            {
                              "x": 324,
                              "y": 250
                            },
                            {
                              "x": 324,
                              "y": 281
                            },
                            {
                              "x": 314,
                              "y": 281
                            }
                          ]
                        },
                        "text": "k",
                        "confidence": 0.94
                      }
                    ],
                    "confidence": 0.96
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "id"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 344,
                          "y": 250
                        },
                        {
                          "x": 352,
                          "y": 250
                        },
                        {
                          "x": 352,
                          "y": 281
                        },
                        {
                          "x": 344,
                          "y": 281
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 344,
                              "y": 250
                            },
                            {
                              "x": 352,
                              "y": 250
                            },
                            {
                              "x": 352,
                              "y": 281
                            },
                            {
                              "x": 344,
                              "y": 281
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.95
                      }
                    ],
                    "confidence": 0.95
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "id"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 363,
                          "y": 250
                        },
                        {
                          "x": 380,
                          "y": 250
                        },
                        {
                          "x": 380,
                          "y": 281
                        },
                        {
                          "x": 363,
                          "y": 281
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 363,
                              "y": 250
                            },
                            {
                              "x": 371,
                              "y": 250
                            },
                            {
                              "x": 371,
                              "y": 281
                            },
                            {
                              "x": 363,
                              "y": 281
                            }
                          ]
                        },
                        "text": "T",
                        "confidence": 0.8
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "id"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 373,
                              "y": 250
                            },
                            {
                              "x": 380,
                              "y": 250
                            },
                            {
                              "x": 380,
                              "y": 281
                            },
                            {
                              "x": 373,
                              "y": 281
                            }
                          ]
                        },
                        "text": "X",
                        "confidence": 0.81
                      }
                    ],
                    "confidence": 0.8
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 163,
                          "y": 286
                        },
                        {
                          "x": 171,
                          "y": 286
                        },
                        {
                          "x": 171,
                          "y": 318
                        },
                        {
                          "x": 163,
                          "y": 318
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 163,
                              "y": 286
                            },
                            {
                              "x": 171,
                              "y": 286
                            },
                            {
                              "x": 171,
                              "y": 318
                            },
                            {
                              "x": 163,
                              "y": 318
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 189,
                          "y": 286
                        },
                        {
                          "x": 225,
                          "y": 286
                        },
                        {
                          "x": 225,
                          "y": 318
                        },
                        {
                          "x": 189,
                          "y": 318
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 189,
                              "y": 286
                            },
                            {
                              "x": 199,
                              "y": 286
                            },
                            {
                              "x": 199,
                              "y": 318
                            },
                            {
                              "x": 189,
                              "y": 318
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 202,
                              "y": 286
                            },
                            {
                              "x": 212,
                              "y": 286
                            },
                            {
                              "x": 212,
                              "y": 318
                            },
                            {
                              "x": 202,
                              "y": 318
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 215,
                              "y": 286
                            },
                            {
                              "x": 225,
                              "y": 286
                            },
                            {
                              "x": 225,
                              "y": 318
                            },
                            {
                              "x": 215,
                              "y": 318
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 245,
                          "y": 286
                        },
                        {
                          "x": 342,
                          "y": 286
                        },
                        {
                          "x": 342,
                          "y": 318
                        },
                        {
                          "x": 245,
                          "y": 318
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 245,
                              "y": 286
                            },
                            {
                              "x": 255,
                              "y": 286
                            },
                            {
                              "x": 255,
                              "y": 318
                            },
                            {
                              "x": 245,
                              "y": 318
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 258,
                              "y": 286
                            },
                            {
                              "x": 268,
                              "y": 286
                            },
                            {
                              "x": 268,
                              "y": 318
                            },
                            {
                              "x": 258,
                              "y": 318
                            }
                          ]
                        },
                        "text": "u",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 270,
                              "y": 286
                            },
                            {
                              "x": 281,
                              "y": 286
                            },
                            {
                              "x": 281,
                              "y": 318
                            },
                            {
                              "x": 270,
                              "y": 318
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 286,
                              "y": 286
                            },
                            {
                              "x": 299,
                              "y": 286
                            },
                            {
                              "x": 299,
                              "y": 318
                            },
                            {
                              "x": 286,
                              "y": 318
                            }
                          ]
                        },
                        "text": "r",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 304,
                              "y": 286
                            },
                            {
                              "x": 314,
                              "y": 286
                            },
                            {
                              "x": 314,
                              "y": 318
                            },
                            {
                              "x": 304,
                              "y": 318
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 314,
                              "y": 286
                            },
                            {
                              "x": 324,
                              "y": 286
                            },
                            {
                              "x": 324,
                              "y": 318
                            },
                            {
                              "x": 314,
                              "y": 318
                            }
                          ]
                        },
                        "text": "m",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 329,
                              "y": 286
                            },
                            {
                              "x": 342,
                              "y": 286
                            },
                            {
                              "x": 342,
                              "y": 318
                            },
                            {
                              "x": 329,
                              "y": 318
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 361,
                          "y": 286
                        },
                        {
                          "x": 369,
                          "y": 286
                        },
                        {
                          "x": 369,
                          "y": 318
                        },
                        {
                          "x": 361,
                          "y": 318
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 361,
                              "y": 286
                            },
                            {
                              "x": 369,
                              "y": 286
                            },
                            {
                              "x": 369,
                              "y": 318
                            },
                            {
                              "x": 361,
                              "y": 318
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 390,
                          "y": 286
                        },
                        {
                          "x": 413,
                          "y": 286
                        },
                        {
                          "x": 413,
                          "y": 318
                        },
                        {
                          "x": 390,
                          "y": 318
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 390,
                              "y": 286
                            },
                            {
                              "x": 400,
                              "y": 286
                            },
                            {
                              "x": 400,
                              "y": 318
                            },
                            {
                              "x": 390,
                              "y": 318
                            }
                          ]
                        },
                        "text": "T",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 403,
                              "y": 286
                            },
                            {
                              "x": 413,
                              "y": 286
                            },
                            {
                              "x": 413,
                              "y": 318
                            },
                            {
                              "x": 403,
                              "y": 318
                            }
                          ]
                        },
                        "text": "x",
                        "confidence": 0.62
                      }
                    ],
                    "confidence": 0.8
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 161,
                          "y": 320
                        },
                        {
                          "x": 170,
                          "y": 320
                        },
                        {
                          "x": 170,
                          "y": 354
                        },
                        {
                          "x": 161,
                          "y": 354
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 161,
                              "y": 320
                            },
                            {
                              "x": 170,
                              "y": 320
                            },
                            {
                              "x": 170,
                              "y": 354
                            },
                            {
                              "x": 161,
                              "y": 354
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 188,
                          "y": 320
                        },
                        {
                          "x": 227,
                          "y": 320
                        },
                        {
                          "x": 227,
                          "y": 354
                        },
                        {
                          "x": 188,
                          "y": 354
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 188,
                              "y": 320
                            },
                            {
                              "x": 199,
                              "y": 320
                            },
                            {
                              "x": 199,
                              "y": 354
                            },
                            {
                              "x": 188,
                              "y": 354
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 202,
                              "y": 320
                            },
                            {
                              "x": 213,
                              "y": 320
                            },
                            {
                              "x": 213,
                              "y": 354
                            },
                            {
                              "x": 202,
                              "y": 354
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 216,
                              "y": 320
                            },
                            {
                              "x": 227,
                              "y": 320
                            },
                            {
                              "x": 227,
                              "y": 354
                            },
                            {
                              "x": 216,
                              "y": 354
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 244,
                          "y": 320
                        },
                        {
                          "x": 283,
                          "y": 320
                        },
                        {
                          "x": 283,
                          "y": 354
                        },
                        {
                          "x": 244,
                          "y": 354
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 244,
                              "y": 320
                            },
                            {
                              "x": 255,
                              "y": 320
                            },
                            {
                              "x": 255,
                              "y": 354
                            },
                            {
                              "x": 244,
                              "y": 354
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 258,
                              "y": 320
                            },
                            {
                              "x": 269,
                              "y": 320
                            },
                            {
                              "x": 269,
                              "y": 354
                            },
                            {
                              "x": 258,
                              "y": 354
                            }
                          ]
                        },
                        "text": "u",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 272,
                              "y": 320
                            },
                            {
                              "x": 283,
                              "y": 320
                            },
                            {
                              "x": 283,
                              "y": 354
                            },
                            {
                              "x": 272,
                              "y": 354
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 290,
                          "y": 320
                        },
                        {
                          "x": 299,
                          "y": 320
                        },
                        {
                          "x": 299,
                          "y": 354
                        },
                        {
                          "x": 290,
                          "y": 354
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 290,
                              "y": 320
                            },
                            {
                              "x": 299,
                              "y": 320
                            },
                            {
                              "x": 299,
                              "y": 354
                            },
                            {
                              "x": 290,
                              "y": 354
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 317,
                          "y": 320
                        },
                        {
                          "x": 384,
                          "y": 320
                        },
                        {
                          "x": 384,
                          "y": 354
                        },
                        {
                          "x": 317,
                          "y": 354
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 317,
                              "y": 320
                            },
                            {
                              "x": 328,
                              "y": 320
                            },
                            {
                              "x": 328,
                              "y": 354
                            },
                            {
                              "x": 317,
                              "y": 354
                            }
                          ]
                        },
                        "text": "L",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 331,
                              "y": 320
                            },
                            {
                              "x": 342,
                              "y": 320
                            },
                            {
                              "x": 342,
                              "y": 354
                            },
                            {
                              "x": 331,
                              "y": 354
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 345,
                              "y": 320
                            },
                            {
                              "x": 356,
                              "y": 320
                            },
                            {
                              "x": 356,
                              "y": 354
                            },
                            {
                              "x": 345,
                              "y": 354
                            }
                          ]
                        },
                        "text": "b",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 359,
                              "y": 320
                            },
                            {
                              "x": 370,
                              "y": 320
                            },
                            {
                              "x": 370,
                              "y": 354
                            },
                            {
                              "x": 359,
                              "y": 354
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 373,
                              "y": 320
                            },
                            {
                              "x": 384,
                              "y": 320
                            },
                            {
                              "x": 384,
                              "y": 354
                            },
                            {
                              "x": 373,
                              "y": 354
                            }
                          ]
                        },
                        "text": "r",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 402,
                          "y": 320
                        },
                        {
                          "x": 411,
                          "y": 320
                        },
                        {
                          "x": 411,
                          "y": 354
                        },
                        {
                          "x": 402,
                          "y": 354
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 402,
                              "y": 320
                            },
                            {
                              "x": 411,
                              "y": 320
                            },
                            {
                              "x": 411,
                              "y": 354
                            },
                            {
                              "x": 402,
                              "y": 354
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 434,
                          "y": 320
                        },
                        {
                          "x": 453,
                          "y": 320
                        },
                        {
                          "x": 453,
                          "y": 354
                        },
                        {
                          "x": 434,
                          "y": 354
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 434,
                              "y": 320
                            },
                            {
                              "x": 443,
                              "y": 320
                            },
                            {
                              "x": 443,
                              "y": 354
                            },
                            {
                              "x": 434,
                              "y": 354
                            }
                          ]
                        },
                        "text": "T",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 445,
                              "y": 320
                            },
                            {
                              "x": 453,
                              "y": 320
                            },
                            {
                              "x": 453,
                              "y": 354
                            },
                            {
                              "x": 445,
                              "y": 354
                            }
                          ]
                        },
                        "text": "X",
                        "confidence": 0.27
                      }
                    ],
                    "confidence": 0.63
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 163,
                          "y": 354
                        },
                        {
                          "x": 171,
                          "y": 354
                        },
                        {
                          "x": 171,
                          "y": 386
                        },
                        {
                          "x": 163,
                          "y": 386
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 163,
                              "y": 354
                            },
                            {
                              "x": 171,
                              "y": 354
                            },
                            {
                              "x": 171,
                              "y": 386
                            },
                            {
                              "x": 163,
                              "y": 386
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 189,
                          "y": 354
                        },
                        {
                          "x": 225,
                          "y": 354
                        },
                        {
                          "x": 225,
                          "y": 386
                        },
                        {
                          "x": 189,
                          "y": 386
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 189,
                              "y": 354
                            },
                            {
                              "x": 199,
                              "y": 354
                            },
                            {
                              "x": 199,
                              "y": 386
                            },
                            {
                              "x": 189,
                              "y": 386
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 202,
                              "y": 354
                            },
                            {
                              "x": 212,
                              "y": 354
                            },
                            {
                              "x": 212,
                              "y": 386
                            },
                            {
                              "x": 202,
                              "y": 386
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 215,
                              "y": 354
                            },
                            {
                              "x": 225,
                              "y": 354
                            },
                            {
                              "x": 225,
                              "y": 386
                            },
                            {
                              "x": 215,
                              "y": 386
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.98
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 245,
                          "y": 354
                        },
                        {
                          "x": 281,
                          "y": 354
                        },
                        {
                          "x": 281,
                          "y": 386
                        },
                        {
                          "x": 245,
                          "y": 386
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 245,
                              "y": 354
                            },
                            {
                              "x": 255,
                              "y": 354
                            },
                            {
                              "x": 255,
                              "y": 386
                            },
                            {
                              "x": 245,
                              "y": 386
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 258,
                              "y": 354
                            },
                            {
                              "x": 268,
                              "y": 354
                            },
                            {
                              "x": 268,
                              "y": 386
                            },
                            {
                              "x": 258,
                              "y": 386
                            }
                          ]
                        },
                        "text": "u",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 271,
                              "y": 354
                            },
                            {
                              "x": 281,
                              "y": 354
                            },
                            {
                              "x": 281,
                              "y": 386
                            },
                            {
                              "x": 271,
                              "y": 386
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 292,
                          "y": 354
                        },
                        {
                          "x": 300,
                          "y": 354
                        },
                        {
                          "x": 300,
                          "y": 386
                        },
                        {
                          "x": 292,
                          "y": 386
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 292,
                              "y": 354
                            },
                            {
                              "x": 300,
                              "y": 354
                            },
                            {
                              "x": 300,
                              "y": 386
                            },
                            {
                              "x": 292,
                              "y": 386
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 317,
                          "y": 354
                        },
                        {
                          "x": 388,
                          "y": 354
                        },
                        {
                          "x": 388,
                          "y": 386
                        },
                        {
                          "x": 317,
                          "y": 386
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 317,
                              "y": 354
                            },
                            {
                              "x": 327,
                              "y": 354
                            },
                            {
                              "x": 327,
                              "y": 386
                            },
                            {
                              "x": 317,
                              "y": 386
                            }
                          ]
                        },
                        "text": "P",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 329,
                              "y": 354
                            },
                            {
                              "x": 341,
                              "y": 354
                            },
                            {
                              "x": 341,
                              "y": 386
                            },
                            {
                              "x": 329,
                              "y": 386
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 346,
                              "y": 354
                            },
                            {
                              "x": 357,
                              "y": 354
                            },
                            {
                              "x": 357,
                              "y": 386
                            },
                            {
                              "x": 346,
                              "y": 386
                            }
                          ]
                        },
                        "text": "r",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 359,
                              "y": 354
                            },
                            {
                              "x": 371,
                              "y": 354
                            },
                            {
                              "x": 371,
                              "y": 386
                            },
                            {
                              "x": 359,
                              "y": 386
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 375,
                              "y": 354
                            },
                            {
                              "x": 388,
                              "y": 354
                            },
                            {
                              "x": 388,
                              "y": 386
                            },
                            {
                              "x": 375,
                              "y": 386
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 404,
                          "y": 354
                        },
                        {
                          "x": 412,
                          "y": 354
                        },
                        {
                          "x": 412,
                          "y": 386
                        },
                        {
                          "x": 404,
                          "y": 386
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 404,
                              "y": 354
                            },
                            {
                              "x": 412,
                              "y": 354
                            },
                            {
                              "x": 412,
                              "y": 386
                            },
                            {
                              "x": 404,
                              "y": 386
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 433,
                          "y": 354
                        },
                        {
                          "x": 456,
                          "y": 354
                        },
                        {
                          "x": 456,
                          "y": 386
                        },
                        {
                          "x": 433,
                          "y": 386
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 433,
                              "y": 354
                            },
                            {
                              "x": 443,
                              "y": 354
                            },
                            {
                              "x": 443,
                              "y": 386
                            },
                            {
                              "x": 433,
                              "y": 386
                            }
                          ]
                        },
                        "text": "T",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 446,
                              "y": 354
                            },
                            {
                              "x": 456,
                              "y": 354
                            },
                            {
                              "x": 456,
                              "y": 386
                            },
                            {
                              "x": 446,
                              "y": 386
                            }
                          ]
                        },
                        "text": "X",
                        "confidence": 0.94
                      }
                    ],
                    "confidence": 0.95
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "no"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 161,
                          "y": 390
                        },
                        {
                          "x": 169,
                          "y": 390
                        },
                        {
                          "x": 169,
                          "y": 422
                        },
                        {
                          "x": 161,
                          "y": 422
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 161,
                              "y": 390
                            },
                            {
                              "x": 169,
                              "y": 390
                            },
                            {
                              "x": 169,
                              "y": 422
                            },
                            {
                              "x": 161,
                              "y": 422
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "no"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 187,
                          "y": 390
                        },
                        {
                          "x": 256,
                          "y": 390
                        },
                        {
                          "x": 256,
                          "y": 422
                        },
                        {
                          "x": 187,
                          "y": 422
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 187,
                              "y": 390
                            },
                            {
                              "x": 197,
                              "y": 390
                            },
                            {
                              "x": 197,
                              "y": 422
                            },
                            {
                              "x": 187,
                              "y": 422
                            }
                          ]
                        },
                        "text": "M",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 200,
                              "y": 390
                            },
                            {
                              "x": 210,
                              "y": 390
                            },
                            {
                              "x": 210,
                              "y": 422
                            },
                            {
                              "x": 200,
                              "y": 422
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 211,
                              "y": 390
                            },
                            {
                              "x": 224,
                              "y": 390
                            },
                            {
                              "x": 224,
                              "y": 422
                            },
                            {
                              "x": 211,
                              "y": 422
                            }
                          ]
                        },
                        "text": "b",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 231,
                              "y": 390
                            },
                            {
                              "x": 244,
                              "y": 390
                            },
                            {
                              "x": 244,
                              "y": 422
                            },
                            {
                              "x": 231,
                              "y": 422
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 246,
                              "y": 390
                            },
                            {
                              "x": 256,
                              "y": 390
                            },
                            {
                              "x": 256,
                              "y": 422
                            },
                            {
                              "x": 246,
                              "y": 422
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "no"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 277,
                          "y": 390
                        },
                        {
                          "x": 285,
                          "y": 390
                        },
                        {
                          "x": 285,
                          "y": 422
                        },
                        {
                          "x": 277,
                          "y": 422
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 277,
                              "y": 390
                            },
                            {
                              "x": 285,
                              "y": 390
                            },
                            {
                              "x": 285,
                              "y": 422
                            },
                            {
                              "x": 277,
                              "y": 422
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "no"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 305,
                          "y": 390
                        },
                        {
                          "x": 367,
                          "y": 390
                        },
                        {
                          "x": 367,
                          "y": 422
                        },
                        {
                          "x": 305,
                          "y": 422
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 305,
                              "y": 390
                            },
                            {
                              "x": 315,
                              "y": 390
                            },
                            {
                              "x": 315,
                              "y": 422
                            },
                            {
                              "x": 305,
                              "y": 422
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 319,
                              "y": 390
                            },
                            {
                              "x": 328,
                              "y": 390
                            },
                            {
                              "x": 328,
                              "y": 422
                            },
                            {
                              "x": 319,
                              "y": 422
                            }
                          ]
                        },
                        "text": "y",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 327,
                              "y": 390
                            },
                            {
                              "x": 339,
                              "y": 390
                            },
                            {
                              "x": 339,
                              "y": 422
                            },
                            {
                              "x": 327,
                              "y": 422
                            }
                          ]
                        },
                        "text": "n",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 347,
                              "y": 390
                            },
                            {
                              "x": 358,
                              "y": 390
                            },
                            {
                              "x": 358,
                              "y": 422
                            },
                            {
                              "x": 347,
                              "y": 422
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "no"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 359,
                              "y": 390
                            },
                            {
                              "x": 367,
                              "y": 390
                            },
                            {
                              "x": 367,
                              "y": 422
                            },
                            {
                              "x": 359,
                              "y": 422
                            }
                          ]
                        },
                        "text": "h",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 160,
                          "y": 426
                        },
                        {
                          "x": 168,
                          "y": 426
                        },
                        {
                          "x": 168,
                          "y": 457
                        },
                        {
                          "x": 160,
                          "y": 457
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 160,
                              "y": 426
                            },
                            {
                              "x": 168,
                              "y": 426
                            },
                            {
                              "x": 168,
                              "y": 457
                            },
                            {
                              "x": 160,
                              "y": 457
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 184,
                          "y": 426
                        },
                        {
                          "x": 286,
                          "y": 427
                        },
                        {
                          "x": 286,
                          "y": 459
                        },
                        {
                          "x": 184,
                          "y": 458
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 184,
                              "y": 427
                            },
                            {
                              "x": 196,
                              "y": 427
                            },
                            {
                              "x": 196,
                              "y": 458
                            },
                            {
                              "x": 184,
                              "y": 458
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 201,
                              "y": 427
                            },
                            {
                              "x": 212,
                              "y": 427
                            },
                            {
                              "x": 212,
                              "y": 458
                            },
                            {
                              "x": 201,
                              "y": 458
                            }
                          ]
                        },
                        "text": "u",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 214,
                              "y": 427
                            },
                            {
                              "x": 225,
                              "y": 427
                            },
                            {
                              "x": 225,
                              "y": 458
                            },
                            {
                              "x": 214,
                              "y": 458
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 229,
                              "y": 427
                            },
                            {
                              "x": 241,
                              "y": 427
                            },
                            {
                              "x": 241,
                              "y": 458
                            },
                            {
                              "x": 229,
                              "y": 458
                            }
                          ]
                        },
                        "text": "r",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 246,
                              "y": 427
                            },
                            {
                              "x": 257,
                              "y": 427
                            },
                            {
                              "x": 257,
                              "y": 458
                            },
                            {
                              "x": 246,
                              "y": 458
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 258,
                              "y": 428
                            },
                            {
                              "x": 269,
                              "y": 428
                            },
                            {
                              "x": 269,
                              "y": 459
                            },
                            {
                              "x": 258,
                              "y": 459
                            }
                          ]
                        },
                        "text": "m",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 273,
                              "y": 428
                            },
                            {
                              "x": 286,
                              "y": 428
                            },
                            {
                              "x": 286,
                              "y": 459
                            },
                            {
                              "x": 273,
                              "y": 459
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 303,
                          "y": 428
                        },
                        {
                          "x": 441,
                          "y": 430
                        },
                        {
                          "x": 441,
                          "y": 462
                        },
                        {
                          "x": 303,
                          "y": 460
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 303,
                              "y": 428
                            },
                            {
                              "x": 313,
                              "y": 428
                            },
                            {
                              "x": 313,
                              "y": 459
                            },
                            {
                              "x": 303,
                              "y": 459
                            }
                          ]
                        },
                        "text": "I",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 316,
                              "y": 428
                            },
                            {
                              "x": 327,
                              "y": 428
                            },
                            {
                              "x": 327,
                              "y": 459
                            },
                            {
                              "x": 316,
                              "y": 459
                            }
                          ]
                        },
                        "text": "n",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 332,
                              "y": 429
                            },
                            {
                              "x": 343,
                              "y": 429
                            },
                            {
                              "x": 343,
                              "y": 460
                            },
                            {
                              "x": 332,
                              "y": 460
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 345,
                              "y": 429
                            },
                            {
                              "x": 356,
                              "y": 429
                            },
                            {
                              "x": 356,
                              "y": 460
                            },
                            {
                              "x": 345,
                              "y": 460
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 361,
                              "y": 429
                            },
                            {
                              "x": 372,
                              "y": 429
                            },
                            {
                              "x": 372,
                              "y": 460
                            },
                            {
                              "x": 361,
                              "y": 460
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 374,
                              "y": 429
                            },
                            {
                              "x": 385,
                              "y": 429
                            },
                            {
                              "x": 385,
                              "y": 460
                            },
                            {
                              "x": 374,
                              "y": 460
                            }
                          ]
                        },
                        "text": "c",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 389,
                              "y": 429
                            },
                            {
                              "x": 401,
                              "y": 429
                            },
                            {
                              "x": 401,
                              "y": 460
                            },
                            {
                              "x": 389,
                              "y": 460
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 406,
                              "y": 430
                            },
                            {
                              "x": 417,
                              "y": 430
                            },
                            {
                              "x": 417,
                              "y": 461
                            },
                            {
                              "x": 406,
                              "y": 461
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 419,
                              "y": 430
                            },
                            {
                              "x": 429,
                              "y": 430
                            },
                            {
                              "x": 429,
                              "y": 461
                            },
                            {
                              "x": 419,
                              "y": 461
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 432,
                              "y": 430
                            },
                            {
                              "x": 441,
                              "y": 430
                            },
                            {
                              "x": 441,
                              "y": 461
                            },
                            {
                              "x": 432,
                              "y": 461
                            }
                          ]
                        },
                        "text": "n",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 161,
                          "y": 461
                        },
                        {
                          "x": 169,
                          "y": 461
                        },
                        {
                          "x": 169,
                          "y": 492
                        },
                        {
                          "x": 161,
                          "y": 492
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 161,
                              "y": 461
                            },
                            {
                              "x": 169,
                              "y": 461
                            },
                            {
                              "x": 169,
                              "y": 492
                            },
                            {
                              "x": 161,
                              "y": 492
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 180,
                          "y": 461
                        },
                        {
                          "x": 258,
                          "y": 461
                        },
                        {
                          "x": 258,
                          "y": 492
                        },
                        {
                          "x": 180,
                          "y": 492
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 180,
                              "y": 461
                            },
                            {
                              "x": 195,
                              "y": 461
                            },
                            {
                              "x": 195,
                              "y": 492
                            },
                            {
                              "x": 180,
                              "y": 492
                            }
                          ]
                        },
                        "text": "W",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 201,
                              "y": 461
                            },
                            {
                              "x": 213,
                              "y": 461
                            },
                            {
                              "x": 213,
                              "y": 492
                            },
                            {
                              "x": 201,
                              "y": 492
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 214,
                              "y": 461
                            },
                            {
                              "x": 225,
                              "y": 461
                            },
                            {
                              "x": 225,
                              "y": 492
                            },
                            {
                              "x": 214,
                              "y": 492
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 230,
                              "y": 461
                            },
                            {
                              "x": 242,
                              "y": 461
                            },
                            {
                              "x": 242,
                              "y": 492
                            },
                            {
                              "x": 230,
                              "y": 492
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 246,
                              "y": 461
                            },
                            {
                              "x": 258,
                              "y": 461
                            },
                            {
                              "x": 258,
                              "y": 492
                            },
                            {
                              "x": 246,
                              "y": 492
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 271,
                          "y": 461
                        },
                        {
                          "x": 316,
                          "y": 461
                        },
                        {
                          "x": 316,
                          "y": 492
                        },
                        {
                          "x": 271,
                          "y": 492
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 271,
                              "y": 461
                            },
                            {
                              "x": 284,
                              "y": 461
                            },
                            {
                              "x": 284,
                              "y": 492
                            },
                            {
                              "x": 271,
                              "y": 492
                            }
                          ]
                        },
                        "text": "F",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 287,
                              "y": 461
                            },
                            {
                              "x": 300,
                              "y": 461
                            },
                            {
                              "x": 300,
                              "y": 492
                            },
                            {
                              "x": 287,
                              "y": 492
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 303,
                              "y": 461
                            },
                            {
                              "x": 316,
                              "y": 461
                            },
                            {
                              "x": 316,
                              "y": 492
                            },
                            {
                              "x": 303,
                              "y": 492
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.97
              },
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 108,
                      "y": 494
                    },
                    {
                      "x": 461,
                      "y": 494
                    },
                    {
                      "x": 461,
                      "y": 564
                    },
                    {
                      "x": 108,
                      "y": 564
                    }
                  ]
                },
                "words": [
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 159,
                          "y": 494
                        },
                        {
                          "x": 168,
                          "y": 494
                        },
                        {
                          "x": 168,
                          "y": 528
                        },
                        {
                          "x": 159,
                          "y": 528
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 159,
                              "y": 494
                            },
                            {
                              "x": 168,
                              "y": 494
                            },
                            {
                              "x": 168,
                              "y": 528
                            },
                            {
                              "x": 159,
                              "y": 528
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 200,
                          "y": 494
                        },
                        {
                          "x": 258,
                          "y": 494
                        },
                        {
                          "x": 258,
                          "y": 528
                        },
                        {
                          "x": 200,
                          "y": 528
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 200,
                              "y": 494
                            },
                            {
                              "x": 211,
                              "y": 494
                            },
                            {
                              "x": 211,
                              "y": 528
                            },
                            {
                              "x": 200,
                              "y": 528
                            }
                          ]
                        },
                        "text": "L",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 214,
                              "y": 494
                            },
                            {
                              "x": 225,
                              "y": 494
                            },
                            {
                              "x": 225,
                              "y": 528
                            },
                            {
                              "x": 214,
                              "y": 528
                            }
                          ]
                        },
                        "text": "u",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 228,
                              "y": 494
                            },
                            {
                              "x": 240,
                              "y": 494
                            },
                            {
                              "x": 240,
                              "y": 528
                            },
                            {
                              "x": 228,
                              "y": 528
                            }
                          ]
                        },
                        "text": "b",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 244,
                              "y": 494
                            },
                            {
                              "x": 258,
                              "y": 494
                            },
                            {
                              "x": 258,
                              "y": 528
                            },
                            {
                              "x": 244,
                              "y": 528
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 269,
                          "y": 494
                        },
                        {
                          "x": 327,
                          "y": 494
                        },
                        {
                          "x": 327,
                          "y": 528
                        },
                        {
                          "x": 269,
                          "y": 528
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 269,
                              "y": 494
                            },
                            {
                              "x": 282,
                              "y": 494
                            },
                            {
                              "x": 282,
                              "y": 528
                            },
                            {
                              "x": 269,
                              "y": 528
                            }
                          ]
                        },
                        "text": "W",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 287,
                              "y": 494
                            },
                            {
                              "x": 300,
                              "y": 494
                            },
                            {
                              "x": 300,
                              "y": 528
                            },
                            {
                              "x": 287,
                              "y": 528
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 302,
                              "y": 494
                            },
                            {
                              "x": 313,
                              "y": 494
                            },
                            {
                              "x": 313,
                              "y": 528
                            },
                            {
                              "x": 302,
                              "y": 528
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 316,
                              "y": 494
                            },
                            {
                              "x": 327,
                              "y": 494
                            },
                            {
                              "x": 327,
                              "y": 528
                            },
                            {
                              "x": 316,
                              "y": 528
                            }
                          ]
                        },
                        "text": "h",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.98
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 346,
                          "y": 494
                        },
                        {
                          "x": 461,
                          "y": 494
                        },
                        {
                          "x": 461,
                          "y": 528
                        },
                        {
                          "x": 346,
                          "y": 528
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 346,
                              "y": 494
                            },
                            {
                              "x": 359,
                              "y": 494
                            },
                            {
                              "x": 359,
                              "y": 528
                            },
                            {
                              "x": 346,
                              "y": 528
                            }
                          ]
                        },
                        "text": "D",
                        "confidence": 0.97
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 365,
                              "y": 494
                            },
                            {
                              "x": 376,
                              "y": 494
                            },
                            {
                              "x": 376,
                              "y": 528
                            },
                            {
                              "x": 365,
                              "y": 528
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 376,
                              "y": 494
                            },
                            {
                              "x": 385,
                              "y": 494
                            },
                            {
                              "x": 385,
                              "y": 528
                            },
                            {
                              "x": 376,
                              "y": 528
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 389,
                              "y": 494
                            },
                            {
                              "x": 400,
                              "y": 494
                            },
                            {
                              "x": 400,
                              "y": 528
                            },
                            {
                              "x": 389,
                              "y": 528
                            }
                          ]
                        },
                        "text": "c",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 403,
                              "y": 494
                            },
                            {
                              "x": 414,
                              "y": 494
                            },
                            {
                              "x": 414,
                              "y": 528
                            },
                            {
                              "x": 403,
                              "y": 528
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 417,
                              "y": 494
                            },
                            {
                              "x": 428,
                              "y": 494
                            },
                            {
                              "x": 428,
                              "y": 528
                            },
                            {
                              "x": 417,
                              "y": 528
                            }
                          ]
                        },
                        "text": "u",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 431,
                              "y": 494
                            },
                            {
                              "x": 443,
                              "y": 494
                            },
                            {
                              "x": 443,
                              "y": 528
                            },
                            {
                              "x": 431,
                              "y": 528
                            }
                          ]
                        },
                        "text": "n",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 447,
                              "y": 494
                            },
                            {
                              "x": 461,
                              "y": 494
                            },
                            {
                              "x": 461,
                              "y": 528
                            },
                            {
                              "x": 447,
                              "y": 528
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 108,
                          "y": 532
                        },
                        {
                          "x": 116,
                          "y": 532
                        },
                        {
                          "x": 116,
                          "y": 564
                        },
                        {
                          "x": 108,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 108,
                              "y": 532
                            },
                            {
                              "x": 116,
                              "y": 532
                            },
                            {
                              "x": 116,
                              "y": 564
                            },
                            {
                              "x": 108,
                              "y": 564
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 128,
                          "y": 532
                        },
                        {
                          "x": 136,
                          "y": 532
                        },
                        {
                          "x": 136,
                          "y": 564
                        },
                        {
                          "x": 128,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 128,
                              "y": 532
                            },
                            {
                              "x": 136,
                              "y": 532
                            },
                            {
                              "x": 136,
                              "y": 564
                            },
                            {
                              "x": 128,
                              "y": 564
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 141,
                          "y": 532
                        },
                        {
                          "x": 164,
                          "y": 532
                        },
                        {
                          "x": 164,
                          "y": 564
                        },
                        {
                          "x": 141,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 141,
                              "y": 532
                            },
                            {
                              "x": 151,
                              "y": 532
                            },
                            {
                              "x": 151,
                              "y": 564
                            },
                            {
                              "x": 141,
                              "y": 564
                            }
                          ]
                        },
                        "text": "8",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 154,
                              "y": 532
                            },
                            {
                              "x": 164,
                              "y": 532
                            },
                            {
                              "x": 164,
                              "y": 564
                            },
                            {
                              "x": 154,
                              "y": 564
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 182,
                          "y": 532
                        },
                        {
                          "x": 270,
                          "y": 532
                        },
                        {
                          "x": 270,
                          "y": 564
                        },
                        {
                          "x": 182,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 182,
                              "y": 532
                            },
                            {
                              "x": 195,
                              "y": 532
                            },
                            {
                              "x": 195,
                              "y": 564
                            },
                            {
                              "x": 182,
                              "y": 564
                            }
                          ]
                        },
                        "text": "M",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 199,
                              "y": 532
                            },
                            {
                              "x": 210,
                              "y": 532
                            },
                            {
                              "x": 210,
                              "y": 564
                            },
                            {
                              "x": 199,
                              "y": 564
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 211,
                              "y": 532
                            },
                            {
                              "x": 224,
                              "y": 532
                            },
                            {
                              "x": 224,
                              "y": 564
                            },
                            {
                              "x": 211,
                              "y": 564
                            }
                          ]
                        },
                        "text": "b",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 231,
                              "y": 532
                            },
                            {
                              "x": 244,
                              "y": 532
                            },
                            {
                              "x": 244,
                              "y": 564
                            },
                            {
                              "x": 231,
                              "y": 564
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 246,
                              "y": 532
                            },
                            {
                              "x": 256,
                              "y": 532
                            },
                            {
                              "x": 256,
                              "y": 564
                            },
                            {
                              "x": 246,
                              "y": 564
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 259,
                              "y": 532
                            },
                            {
                              "x": 270,
                              "y": 532
                            },
                            {
                              "x": 270,
                              "y": 564
                            },
                            {
                              "x": 259,
                              "y": 564
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 293,
                          "y": 532
                        },
                        {
                          "x": 301,
                          "y": 532
                        },
                        {
                          "x": 301,
                          "y": 564
                        },
                        {
                          "x": 293,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 293,
                              "y": 532
                            },
                            {
                              "x": 301,
                              "y": 532
                            },
                            {
                              "x": 301,
                              "y": 564
                            },
                            {
                              "x": 293,
                              "y": 564
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 319,
                          "y": 532
                        },
                        {
                          "x": 372,
                          "y": 532
                        },
                        {
                          "x": 372,
                          "y": 564
                        },
                        {
                          "x": 319,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 319,
                              "y": 532
                            },
                            {
                              "x": 329,
                              "y": 532
                            },
                            {
                              "x": 329,
                              "y": 564
                            },
                            {
                              "x": 319,
                              "y": 564
                            }
                          ]
                        },
                        "text": "O",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 331,
                              "y": 532
                            },
                            {
                              "x": 342,
                              "y": 532
                            },
                            {
                              "x": 342,
                              "y": 564
                            },
                            {
                              "x": 331,
                              "y": 564
                            }
                          ]
                        },
                        "text": "w",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 347,
                              "y": 532
                            },
                            {
                              "x": 359,
                              "y": 532
                            },
                            {
                              "x": 359,
                              "y": 564
                            },
                            {
                              "x": 347,
                              "y": 564
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 362,
                              "y": 532
                            },
                            {
                              "x": 372,
                              "y": 532
                            },
                            {
                              "x": 372,
                              "y": 564
                            },
                            {
                              "x": 362,
                              "y": 564
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 390,
                          "y": 532
                        },
                        {
                          "x": 436,
                          "y": 532
                        },
                        {
                          "x": 436,
                          "y": 564
                        },
                        {
                          "x": 390,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 390,
                              "y": 532
                            },
                            {
                              "x": 403,
                              "y": 532
                            },
                            {
                              "x": 403,
                              "y": 564
                            },
                            {
                              "x": 390,
                              "y": 564
                            }
                          ]
                        },
                        "text": "B",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 407,
                              "y": 532
                            },
                            {
                              "x": 419,
                              "y": 532
                            },
                            {
                              "x": 419,
                              "y": 564
                            },
                            {
                              "x": 407,
                              "y": 564
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 423,
                              "y": 532
                            },
                            {
                              "x": 436,
                              "y": 532
                            },
                            {
                              "x": 436,
                              "y": 564
                            },
                            {
                              "x": 423,
                              "y": 564
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 0.82
                      }
                    ],
                    "confidence": 0.93
                  }
                ],
                "confidence": 0.98
              },
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 152,
                      "y": 568
                    },
                    {
                      "x": 417,
                      "y": 568
                    },
                    {
                      "x": 417,
                      "y": 792
                    },
                    {
                      "x": 152,
                      "y": 792
                    }
                  ]
                },
                "words": [
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 160,
                          "y": 568
                        },
                        {
                          "x": 168,
                          "y": 568
                        },
                        {
                          "x": 168,
                          "y": 600
                        },
                        {
                          "x": 160,
                          "y": 600
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 160,
                              "y": 568
                            },
                            {
                              "x": 168,
                              "y": 568
                            },
                            {
                              "x": 168,
                              "y": 600
                            },
                            {
                              "x": 160,
                              "y": 600
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 185,
                          "y": 568
                        },
                        {
                          "x": 269,
                          "y": 568
                        },
                        {
                          "x": 269,
                          "y": 600
                        },
                        {
                          "x": 185,
                          "y": 600
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 185,
                              "y": 568
                            },
                            {
                              "x": 195,
                              "y": 568
                            },
                            {
                              "x": 195,
                              "y": 600
                            },
                            {
                              "x": 185,
                              "y": 600
                            }
                          ]
                        },
                        "text": "P",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 198,
                              "y": 568
                            },
                            {
                              "x": 209,
                              "y": 568
                            },
                            {
                              "x": 209,
                              "y": 600
                            },
                            {
                              "x": 198,
                              "y": 600
                            }
                          ]
                        },
                        "text": "R",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 211,
                              "y": 568
                            },
                            {
                              "x": 222,
                              "y": 568
                            },
                            {
                              "x": 222,
                              "y": 600
                            },
                            {
                              "x": 211,
                              "y": 600
                            }
                          ]
                        },
                        "text": "G",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 227,
                              "y": 568
                            },
                            {
                              "x": 238,
                              "y": 568
                            },
                            {
                              "x": 238,
                              "y": 600
                            },
                            {
                              "x": 227,
                              "y": 600
                            }
                          ]
                        },
                        "text": "D",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 240,
                              "y": 568
                            },
                            {
                              "x": 252,
                              "y": 568
                            },
                            {
                              "x": 252,
                              "y": 600
                            },
                            {
                              "x": 240,
                              "y": 600
                            }
                          ]
                        },
                        "text": "O",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 257,
                              "y": 568
                            },
                            {
                              "x": 269,
                              "y": 568
                            },
                            {
                              "x": 269,
                              "y": 600
                            },
                            {
                              "x": 257,
                              "y": 600
                            }
                          ]
                        },
                        "text": "F",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 275,
                          "y": 568
                        },
                        {
                          "x": 283,
                          "y": 568
                        },
                        {
                          "x": 283,
                          "y": 600
                        },
                        {
                          "x": 275,
                          "y": 600
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 275,
                              "y": 568
                            },
                            {
                              "x": 283,
                              "y": 568
                            },
                            {
                              "x": 283,
                              "y": 600
                            },
                            {
                              "x": 275,
                              "y": 600
                            }
                          ]
                        },
                        "text": ":",
                        "confidence": 0.97
                      }
                    ],
                    "confidence": 0.97
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 287,
                          "y": 568
                        },
                        {
                          "x": 393,
                          "y": 568
                        },
                        {
                          "x": 393,
                          "y": 600
                        },
                        {
                          "x": 287,
                          "y": 600
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 287,
                              "y": 568
                            },
                            {
                              "x": 298,
                              "y": 568
                            },
                            {
                              "x": 298,
                              "y": 600
                            },
                            {
                              "x": 287,
                              "y": 600
                            }
                          ]
                        },
                        "text": "P",
                        "confidence": 0.91
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 300,
                              "y": 568
                            },
                            {
                              "x": 311,
                              "y": 568
                            },
                            {
                              "x": 311,
                              "y": 600
                            },
                            {
                              "x": 300,
                              "y": 600
                            }
                          ]
                        },
                        "text": "O",
                        "confidence": 0.7
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 316,
                              "y": 568
                            },
                            {
                              "x": 327,
                              "y": 568
                            },
                            {
                              "x": 327,
                              "y": 600
                            },
                            {
                              "x": 316,
                              "y": 600
                            }
                          ]
                        },
                        "text": "F",
                        "confidence": 0.94
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 329,
                              "y": 568
                            },
                            {
                              "x": 341,
                              "y": 568
                            },
                            {
                              "x": 341,
                              "y": 600
                            },
                            {
                              "x": 329,
                              "y": 600
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.94
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 346,
                              "y": 568
                            },
                            {
                              "x": 357,
                              "y": 568
                            },
                            {
                              "x": 357,
                              "y": 600
                            },
                            {
                              "x": 346,
                              "y": 600
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 358,
                              "y": 568
                            },
                            {
                              "x": 371,
                              "y": 568
                            },
                            {
                              "x": 371,
                              "y": 600
                            },
                            {
                              "x": 358,
                              "y": 600
                            }
                          ]
                        },
                        "text": "8",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 377,
                              "y": 568
                            },
                            {
                              "x": 393,
                              "y": 568
                            },
                            {
                              "x": 393,
                              "y": 600
                            },
                            {
                              "x": 377,
                              "y": 600
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.92
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 159,
                          "y": 606
                        },
                        {
                          "x": 168,
                          "y": 606
                        },
                        {
                          "x": 168,
                          "y": 639
                        },
                        {
                          "x": 159,
                          "y": 639
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 159,
                              "y": 606
                            },
                            {
                              "x": 168,
                              "y": 606
                            },
                            {
                              "x": 168,
                              "y": 639
                            },
                            {
                              "x": 159,
                              "y": 639
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 185,
                          "y": 606
                        },
                        {
                          "x": 224,
                          "y": 606
                        },
                        {
                          "x": 224,
                          "y": 639
                        },
                        {
                          "x": 185,
                          "y": 639
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 185,
                              "y": 606
                            },
                            {
                              "x": 196,
                              "y": 606
                            },
                            {
                              "x": 196,
                              "y": 639
                            },
                            {
                              "x": 185,
                              "y": 639
                            }
                          ]
                        },
                        "text": "E",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 200,
                              "y": 606
                            },
                            {
                              "x": 210,
                              "y": 606
                            },
                            {
                              "x": 210,
                              "y": 639
                            },
                            {
                              "x": 200,
                              "y": 639
                            }
                          ]
                        },
                        "text": "x",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 213,
                              "y": 606
                            },
                            {
                              "x": 224,
                              "y": 606
                            },
                            {
                              "x": 224,
                              "y": 639
                            },
                            {
                              "x": 213,
                              "y": 639
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 242,
                          "y": 606
                        },
                        {
                          "x": 329,
                          "y": 606
                        },
                        {
                          "x": 329,
                          "y": 639
                        },
                        {
                          "x": 242,
                          "y": 639
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 242,
                              "y": 606
                            },
                            {
                              "x": 255,
                              "y": 606
                            },
                            {
                              "x": 255,
                              "y": 639
                            },
                            {
                              "x": 242,
                              "y": 639
                            }
                          ]
                        },
                        "text": "C",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 260,
                              "y": 606
                            },
                            {
                              "x": 272,
                              "y": 606
                            },
                            {
                              "x": 272,
                              "y": 639
                            },
                            {
                              "x": 260,
                              "y": 639
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 274,
                              "y": 606
                            },
                            {
                              "x": 285,
                              "y": 606
                            },
                            {
                              "x": 285,
                              "y": 639
                            },
                            {
                              "x": 274,
                              "y": 639
                            }
                          ]
                        },
                        "text": "r",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 287,
                              "y": 606
                            },
                            {
                              "x": 299,
                              "y": 606
                            },
                            {
                              "x": 299,
                              "y": 639
                            },
                            {
                              "x": 287,
                              "y": 639
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 304,
                              "y": 606
                            },
                            {
                              "x": 316,
                              "y": 606
                            },
                            {
                              "x": 316,
                              "y": 639
                            },
                            {
                              "x": 304,
                              "y": 639
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 318,
                              "y": 606
                            },
                            {
                              "x": 329,
                              "y": 606
                            },
                            {
                              "x": 329,
                              "y": 639
                            },
                            {
                              "x": 318,
                              "y": 639
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 348,
                          "y": 606
                        },
                        {
                          "x": 417,
                          "y": 606
                        },
                        {
                          "x": 417,
                          "y": 639
                        },
                        {
                          "x": 348,
                          "y": 639
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 348,
                              "y": 606
                            },
                            {
                              "x": 361,
                              "y": 606
                            },
                            {
                              "x": 361,
                              "y": 639
                            },
                            {
                              "x": 348,
                              "y": 639
                            }
                          ]
                        },
                        "text": "C",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 365,
                              "y": 606
                            },
                            {
                              "x": 377,
                              "y": 606
                            },
                            {
                              "x": 377,
                              "y": 639
                            },
                            {
                              "x": 365,
                              "y": 639
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 380,
                              "y": 606
                            },
                            {
                              "x": 390,
                              "y": 606
                            },
                            {
                              "x": 390,
                              "y": 639
                            },
                            {
                              "x": 380,
                              "y": 639
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 393,
                              "y": 606
                            },
                            {
                              "x": 404,
                              "y": 606
                            },
                            {
                              "x": 404,
                              "y": 639
                            },
                            {
                              "x": 393,
                              "y": 639
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 407,
                              "y": 606
                            },
                            {
                              "x": 417,
                              "y": 606
                            },
                            {
                              "x": 417,
                              "y": 639
                            },
                            {
                              "x": 407,
                              "y": 639
                            }
                          ]
                        },
                        "text": "n",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 157,
                          "y": 640
                        },
                        {
                          "x": 167,
                          "y": 640
                        },
                        {
                          "x": 167,
                          "y": 676
                        },
                        {
                          "x": 157,
                          "y": 676
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 157,
                              "y": 640
                            },
                            {
                              "x": 167,
                              "y": 640
                            },
                            {
                              "x": 167,
                              "y": 676
                            },
                            {
                              "x": 157,
                              "y": 676
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 182,
                          "y": 640
                        },
                        {
                          "x": 223,
                          "y": 640
                        },
                        {
                          "x": 223,
                          "y": 676
                        },
                        {
                          "x": 182,
                          "y": 676
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 182,
                              "y": 640
                            },
                            {
                              "x": 194,
                              "y": 640
                            },
                            {
                              "x": 194,
                              "y": 676
                            },
                            {
                              "x": 182,
                              "y": 676
                            }
                          ]
                        },
                        "text": "E",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 197,
                              "y": 640
                            },
                            {
                              "x": 209,
                              "y": 640
                            },
                            {
                              "x": 209,
                              "y": 676
                            },
                            {
                              "x": 197,
                              "y": 676
                            }
                          ]
                        },
                        "text": "x",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 212,
                              "y": 640
                            },
                            {
                              "x": 223,
                              "y": 640
                            },
                            {
                              "x": 223,
                              "y": 676
                            },
                            {
                              "x": 212,
                              "y": 676
                            }
                          ]
                        },
                        "text": "p",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 245,
                          "y": 640
                        },
                        {
                          "x": 301,
                          "y": 640
                        },
                        {
                          "x": 301,
                          "y": 676
                        },
                        {
                          "x": 245,
                          "y": 676
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 245,
                              "y": 640
                            },
                            {
                              "x": 257,
                              "y": 640
                            },
                            {
                              "x": 257,
                              "y": 676
                            },
                            {
                              "x": 245,
                              "y": 676
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 260,
                              "y": 640
                            },
                            {
                              "x": 272,
                              "y": 640
                            },
                            {
                              "x": 272,
                              "y": 676
                            },
                            {
                              "x": 260,
                              "y": 676
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 275,
                              "y": 640
                            },
                            {
                              "x": 286,
                              "y": 640
                            },
                            {
                              "x": 286,
                              "y": 676
                            },
                            {
                              "x": 275,
                              "y": 676
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 289,
                              "y": 640
                            },
                            {
                              "x": 301,
                              "y": 640
                            },
                            {
                              "x": 301,
                              "y": 676
                            },
                            {
                              "x": 289,
                              "y": 676
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 319,
                          "y": 640
                        },
                        {
                          "x": 390,
                          "y": 640
                        },
                        {
                          "x": 390,
                          "y": 676
                        },
                        {
                          "x": 319,
                          "y": 676
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 319,
                              "y": 640
                            },
                            {
                              "x": 331,
                              "y": 640
                            },
                            {
                              "x": 331,
                              "y": 676
                            },
                            {
                              "x": 319,
                              "y": 676
                            }
                          ]
                        },
                        "text": "T",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 334,
                              "y": 640
                            },
                            {
                              "x": 346,
                              "y": 640
                            },
                            {
                              "x": 346,
                              "y": 676
                            },
                            {
                              "x": 334,
                              "y": 676
                            }
                          ]
                        },
                        "text": "r",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 349,
                              "y": 640
                            },
                            {
                              "x": 360,
                              "y": 640
                            },
                            {
                              "x": 360,
                              "y": 676
                            },
                            {
                              "x": 349,
                              "y": 676
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 363,
                              "y": 640
                            },
                            {
                              "x": 375,
                              "y": 640
                            },
                            {
                              "x": 375,
                              "y": 676
                            },
                            {
                              "x": 363,
                              "y": 676
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 378,
                              "y": 640
                            },
                            {
                              "x": 390,
                              "y": 640
                            },
                            {
                              "x": 390,
                              "y": 676
                            },
                            {
                              "x": 378,
                              "y": 676
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 157,
                          "y": 678
                        },
                        {
                          "x": 166,
                          "y": 678
                        },
                        {
                          "x": 166,
                          "y": 713
                        },
                        {
                          "x": 157,
                          "y": 713
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 157,
                              "y": 678
                            },
                            {
                              "x": 166,
                              "y": 678
                            },
                            {
                              "x": 166,
                              "y": 713
                            },
                            {
                              "x": 157,
                              "y": 713
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 186,
                          "y": 678
                        },
                        {
                          "x": 195,
                          "y": 678
                        },
                        {
                          "x": 195,
                          "y": 713
                        },
                        {
                          "x": 186,
                          "y": 713
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 186,
                              "y": 678
                            },
                            {
                              "x": 195,
                              "y": 678
                            },
                            {
                              "x": 195,
                              "y": 713
                            },
                            {
                              "x": 186,
                              "y": 713
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.98
                      }
                    ],
                    "confidence": 0.98
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 209,
                          "y": 678
                        },
                        {
                          "x": 300,
                          "y": 678
                        },
                        {
                          "x": 300,
                          "y": 713
                        },
                        {
                          "x": 209,
                          "y": 713
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 209,
                              "y": 678
                            },
                            {
                              "x": 223,
                              "y": 678
                            },
                            {
                              "x": 223,
                              "y": 713
                            },
                            {
                              "x": 209,
                              "y": 713
                            }
                          ]
                        },
                        "text": "D",
                        "confidence": 0.95
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 228,
                              "y": 678
                            },
                            {
                              "x": 240,
                              "y": 678
                            },
                            {
                              "x": 240,
                              "y": 713
                            },
                            {
                              "x": 228,
                              "y": 713
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 243,
                              "y": 678
                            },
                            {
                              "x": 254,
                              "y": 678
                            },
                            {
                              "x": 254,
                              "y": 713
                            },
                            {
                              "x": 243,
                              "y": 713
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.97
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 256,
                              "y": 678
                            },
                            {
                              "x": 269,
                              "y": 678
                            },
                            {
                              "x": 269,
                              "y": 713
                            },
                            {
                              "x": 256,
                              "y": 713
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 274,
                              "y": 678
                            },
                            {
                              "x": 287,
                              "y": 678
                            },
                            {
                              "x": 287,
                              "y": 713
                            },
                            {
                              "x": 274,
                              "y": 713
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 0.98
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 289,
                              "y": 678
                            },
                            {
                              "x": 300,
                              "y": 678
                            },
                            {
                              "x": 300,
                              "y": 713
                            },
                            {
                              "x": 289,
                              "y": 713
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.97
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 312,
                          "y": 678
                        },
                        {
                          "x": 372,
                          "y": 678
                        },
                        {
                          "x": 372,
                          "y": 713
                        },
                        {
                          "x": 312,
                          "y": 713
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 312,
                              "y": 678
                            },
                            {
                              "x": 329,
                              "y": 678
                            },
                            {
                              "x": 329,
                              "y": 713
                            },
                            {
                              "x": 312,
                              "y": 713
                            }
                          ]
                        },
                        "text": "D",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 336,
                              "y": 678
                            },
                            {
                              "x": 348,
                              "y": 678
                            },
                            {
                              "x": 348,
                              "y": 713
                            },
                            {
                              "x": 336,
                              "y": 713
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 347,
                              "y": 678
                            },
                            {
                              "x": 357,
                              "y": 678
                            },
                            {
                              "x": 357,
                              "y": 713
                            },
                            {
                              "x": 347,
                              "y": 713
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 361,
                              "y": 678
                            },
                            {
                              "x": 372,
                              "y": 678
                            },
                            {
                              "x": 372,
                              "y": 713
                            },
                            {
                              "x": 361,
                              "y": 713
                            }
                          ]
                        },
                        "text": "c",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.98
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 157,
                          "y": 715
                        },
                        {
                          "x": 167,
                          "y": 715
                        },
                        {
                          "x": 167,
                          "y": 751
                        },
                        {
                          "x": 157,
                          "y": 751
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 157,
                              "y": 715
                            },
                            {
                              "x": 167,
                              "y": 715
                            },
                            {
                              "x": 167,
                              "y": 751
                            },
                            {
                              "x": 157,
                              "y": 751
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 182,
                          "y": 715
                        },
                        {
                          "x": 318,
                          "y": 715
                        },
                        {
                          "x": 318,
                          "y": 751
                        },
                        {
                          "x": 182,
                          "y": 751
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 182,
                              "y": 715
                            },
                            {
                              "x": 194,
                              "y": 715
                            },
                            {
                              "x": 194,
                              "y": 751
                            },
                            {
                              "x": 182,
                              "y": 751
                            }
                          ]
                        },
                        "text": "E",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 197,
                              "y": 715
                            },
                            {
                              "x": 210,
                              "y": 715
                            },
                            {
                              "x": 210,
                              "y": 751
                            },
                            {
                              "x": 197,
                              "y": 751
                            }
                          ]
                        },
                        "text": "m",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 216,
                              "y": 715
                            },
                            {
                              "x": 227,
                              "y": 715
                            },
                            {
                              "x": 227,
                              "y": 751
                            },
                            {
                              "x": 216,
                              "y": 751
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 227,
                              "y": 715
                            },
                            {
                              "x": 237,
                              "y": 715
                            },
                            {
                              "x": 237,
                              "y": 751
                            },
                            {
                              "x": 227,
                              "y": 751
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 241,
                              "y": 715
                            },
                            {
                              "x": 254,
                              "y": 715
                            },
                            {
                              "x": 254,
                              "y": 751
                            },
                            {
                              "x": 241,
                              "y": 751
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 260,
                              "y": 715
                            },
                            {
                              "x": 272,
                              "y": 715
                            },
                            {
                              "x": 272,
                              "y": 751
                            },
                            {
                              "x": 260,
                              "y": 751
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 272,
                              "y": 715
                            },
                            {
                              "x": 282,
                              "y": 715
                            },
                            {
                              "x": 282,
                              "y": 751
                            },
                            {
                              "x": 272,
                              "y": 751
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 286,
                              "y": 715
                            },
                            {
                              "x": 298,
                              "y": 715
                            },
                            {
                              "x": 298,
                              "y": 751
                            },
                            {
                              "x": 286,
                              "y": 751
                            }
                          ]
                        },
                        "text": "n",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 303,
                              "y": 715
                            },
                            {
                              "x": 318,
                              "y": 715
                            },
                            {
                              "x": 318,
                              "y": 751
                            },
                            {
                              "x": 303,
                              "y": 751
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 335,
                          "y": 715
                        },
                        {
                          "x": 345,
                          "y": 715
                        },
                        {
                          "x": 345,
                          "y": 751
                        },
                        {
                          "x": 335,
                          "y": 751
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 335,
                              "y": 715
                            },
                            {
                              "x": 345,
                              "y": 715
                            },
                            {
                              "x": 345,
                              "y": 751
                            },
                            {
                              "x": 335,
                              "y": 751
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 363,
                          "y": 715
                        },
                        {
                          "x": 405,
                          "y": 715
                        },
                        {
                          "x": 405,
                          "y": 751
                        },
                        {
                          "x": 363,
                          "y": 751
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 363,
                              "y": 715
                            },
                            {
                              "x": 375,
                              "y": 715
                            },
                            {
                              "x": 375,
                              "y": 751
                            },
                            {
                              "x": 363,
                              "y": 751
                            }
                          ]
                        },
                        "text": "O",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 378,
                              "y": 715
                            },
                            {
                              "x": 390,
                              "y": 715
                            },
                            {
                              "x": 390,
                              "y": 751
                            },
                            {
                              "x": 378,
                              "y": 751
                            }
                          ]
                        },
                        "text": "B",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 393,
                              "y": 715
                            },
                            {
                              "x": 405,
                              "y": 715
                            },
                            {
                              "x": 405,
                              "y": 751
                            },
                            {
                              "x": 393,
                              "y": 751
                            }
                          ]
                        },
                        "text": "D",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "sk"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 152,
                          "y": 754
                        },
                        {
                          "x": 162,
                          "y": 754
                        },
                        {
                          "x": 162,
                          "y": 792
                        },
                        {
                          "x": 152,
                          "y": 792
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 152,
                              "y": 754
                            },
                            {
                              "x": 162,
                              "y": 754
                            },
                            {
                              "x": 162,
                              "y": 792
                            },
                            {
                              "x": 152,
                              "y": 792
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "sk"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 178,
                          "y": 754
                        },
                        {
                          "x": 284,
                          "y": 754
                        },
                        {
                          "x": 284,
                          "y": 792
                        },
                        {
                          "x": 178,
                          "y": 792
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 178,
                              "y": 754
                            },
                            {
                              "x": 193,
                              "y": 754
                            },
                            {
                              "x": 193,
                              "y": 792
                            },
                            {
                              "x": 178,
                              "y": 792
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 197,
                              "y": 754
                            },
                            {
                              "x": 211,
                              "y": 754
                            },
                            {
                              "x": 211,
                              "y": 792
                            },
                            {
                              "x": 197,
                              "y": 792
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 215,
                              "y": 754
                            },
                            {
                              "x": 226,
                              "y": 754
                            },
                            {
                              "x": 226,
                              "y": 792
                            },
                            {
                              "x": 215,
                              "y": 792
                            }
                          ]
                        },
                        "text": "i",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 226,
                              "y": 754
                            },
                            {
                              "x": 237,
                              "y": 754
                            },
                            {
                              "x": 237,
                              "y": 792
                            },
                            {
                              "x": 226,
                              "y": 792
                            }
                          ]
                        },
                        "text": "c",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 241,
                              "y": 754
                            },
                            {
                              "x": 254,
                              "y": 754
                            },
                            {
                              "x": 254,
                              "y": 792
                            },
                            {
                              "x": 241,
                              "y": 792
                            }
                          ]
                        },
                        "text": "k",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 257,
                              "y": 754
                            },
                            {
                              "x": 269,
                              "y": 754
                            },
                            {
                              "x": 269,
                              "y": 792
                            },
                            {
                              "x": 257,
                              "y": 792
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 272,
                              "y": 754
                            },
                            {
                              "x": 284,
                              "y": 754
                            },
                            {
                              "x": 284,
                              "y": 792
                            },
                            {
                              "x": 272,
                              "y": 792
                            }
                          ]
                        },
                        "text": "r",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "sk"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 304,
                          "y": 754
                        },
                        {
                          "x": 314,
                          "y": 754
                        },
                        {
                          "x": 314,
                          "y": 792
                        },
                        {
                          "x": 304,
                          "y": 792
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 304,
                              "y": 754
                            },
                            {
                              "x": 314,
                              "y": 754
                            },
                            {
                              "x": 314,
                              "y": 792
                            },
                            {
                              "x": 304,
                              "y": 792
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "sk"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 337,
                          "y": 754
                        },
                        {
                          "x": 375,
                          "y": 754
                        },
                        {
                          "x": 375,
                          "y": 792
                        },
                        {
                          "x": 337,
                          "y": 792
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 337,
                              "y": 754
                            },
                            {
                              "x": 346,
                              "y": 754
                            },
                            {
                              "x": 346,
                              "y": 792
                            },
                            {
                              "x": 337,
                              "y": 792
                            }
                          ]
                        },
                        "text": "O",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 347,
                              "y": 754
                            },
                            {
                              "x": 358,
                              "y": 754
                            },
                            {
                              "x": 358,
                              "y": 792
                            },
                            {
                              "x": 347,
                              "y": 792
                            }
                          ]
                        },
                        "text": "D",
                        "confidence": 0.97
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "sk"
                            }
                          ],
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 362,
                              "y": 754
                            },
                            {
                              "x": 375,
                              "y": 754
                            },
                            {
                              "x": 375,
                              "y": 792
                            },
                            {
                              "x": 362,
                              "y": 792
                            }
                          ]
                        },
                        "text": "B",
                        "confidence": 0.96
                      }
                    ],
                    "confidence": 0.96
                  }
                ],
                "confidence": 0.98
              }
            ],
            "blockType": "TEXT",
            "confidence": 0.98
          },
          {
            "boundingBox": {
              "vertices": [
                {
                  "x": 558,
                  "y": 460
                },
                {
                  "x": 650,
                  "y": 460
                },
                {
                  "x": 650,
                  "y": 791
                },
                {
                  "x": 558,
                  "y": 791
                }
              ]
            },
            "paragraphs": [
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 565,
                      "y": 460
                    },
                    {
                      "x": 634,
                      "y": 460
                    },
                    {
                      "x": 634,
                      "y": 564
                    },
                    {
                      "x": 565,
                      "y": 564
                    }
                  ]
                },
                "words": [
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 579,
                          "y": 460
                        },
                        {
                          "x": 587,
                          "y": 460
                        },
                        {
                          "x": 587,
                          "y": 492
                        },
                        {
                          "x": 579,
                          "y": 492
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 579,
                              "y": 460
                            },
                            {
                              "x": 587,
                              "y": 460
                            },
                            {
                              "x": 587,
                              "y": 492
                            },
                            {
                              "x": 579,
                              "y": 492
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 596,
                          "y": 460
                        },
                        {
                          "x": 604,
                          "y": 460
                        },
                        {
                          "x": 604,
                          "y": 492
                        },
                        {
                          "x": 596,
                          "y": 492
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 596,
                              "y": 460
                            },
                            {
                              "x": 604,
                              "y": 460
                            },
                            {
                              "x": 604,
                              "y": 492
                            },
                            {
                              "x": 596,
                              "y": 492
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 608,
                          "y": 460
                        },
                        {
                          "x": 631,
                          "y": 460
                        },
                        {
                          "x": 631,
                          "y": 492
                        },
                        {
                          "x": 608,
                          "y": 492
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 608,
                              "y": 460
                            },
                            {
                              "x": 618,
                              "y": 460
                            },
                            {
                              "x": 618,
                              "y": 492
                            },
                            {
                              "x": 608,
                              "y": 492
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 621,
                              "y": 460
                            },
                            {
                              "x": 631,
                              "y": 460
                            },
                            {
                              "x": 631,
                              "y": 492
                            },
                            {
                              "x": 621,
                              "y": 492
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 565,
                          "y": 496
                        },
                        {
                          "x": 573,
                          "y": 496
                        },
                        {
                          "x": 573,
                          "y": 528
                        },
                        {
                          "x": 565,
                          "y": 528
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 565,
                              "y": 496
                            },
                            {
                              "x": 573,
                              "y": 496
                            },
                            {
                              "x": 573,
                              "y": 528
                            },
                            {
                              "x": 565,
                              "y": 528
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 578,
                          "y": 496
                        },
                        {
                          "x": 586,
                          "y": 496
                        },
                        {
                          "x": 586,
                          "y": 528
                        },
                        {
                          "x": 578,
                          "y": 528
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 578,
                              "y": 496
                            },
                            {
                              "x": 586,
                              "y": 496
                            },
                            {
                              "x": 586,
                              "y": 528
                            },
                            {
                              "x": 578,
                              "y": 528
                            }
                          ]
                        },
                        "text": "6",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 595,
                          "y": 496
                        },
                        {
                          "x": 603,
                          "y": 496
                        },
                        {
                          "x": 603,
                          "y": 528
                        },
                        {
                          "x": 595,
                          "y": 528
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 595,
                              "y": 496
                            },
                            {
                              "x": 603,
                              "y": 496
                            },
                            {
                              "x": 603,
                              "y": 528
                            },
                            {
                              "x": 595,
                              "y": 528
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 607,
                          "y": 496
                        },
                        {
                          "x": 631,
                          "y": 496
                        },
                        {
                          "x": 631,
                          "y": 528
                        },
                        {
                          "x": 607,
                          "y": 528
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 607,
                              "y": 496
                            },
                            {
                              "x": 617,
                              "y": 496
                            },
                            {
                              "x": 617,
                              "y": 528
                            },
                            {
                              "x": 607,
                              "y": 528
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 620,
                              "y": 496
                            },
                            {
                              "x": 631,
                              "y": 496
                            },
                            {
                              "x": 631,
                              "y": 528
                            },
                            {
                              "x": 620,
                              "y": 528
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 567,
                          "y": 532
                        },
                        {
                          "x": 591,
                          "y": 532
                        },
                        {
                          "x": 591,
                          "y": 564
                        },
                        {
                          "x": 567,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 567,
                              "y": 532
                            },
                            {
                              "x": 578,
                              "y": 532
                            },
                            {
                              "x": 578,
                              "y": 564
                            },
                            {
                              "x": 567,
                              "y": 564
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 581,
                              "y": 532
                            },
                            {
                              "x": 591,
                              "y": 532
                            },
                            {
                              "x": 591,
                              "y": 564
                            },
                            {
                              "x": 581,
                              "y": 564
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 598,
                          "y": 532
                        },
                        {
                          "x": 606,
                          "y": 532
                        },
                        {
                          "x": 606,
                          "y": 564
                        },
                        {
                          "x": 598,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 598,
                              "y": 532
                            },
                            {
                              "x": 606,
                              "y": 532
                            },
                            {
                              "x": 606,
                              "y": 564
                            },
                            {
                              "x": 598,
                              "y": 564
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 610,
                          "y": 532
                        },
                        {
                          "x": 634,
                          "y": 532
                        },
                        {
                          "x": 634,
                          "y": 564
                        },
                        {
                          "x": 610,
                          "y": 564
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 610,
                              "y": 532
                            },
                            {
                              "x": 621,
                              "y": 532
                            },
                            {
                              "x": 621,
                              "y": 564
                            },
                            {
                              "x": 610,
                              "y": 564
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 624,
                              "y": 532
                            },
                            {
                              "x": 634,
                              "y": 532
                            },
                            {
                              "x": 634,
                              "y": 564
                            },
                            {
                              "x": 624,
                              "y": 564
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.99
              },
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 558,
                      "y": 568
                    },
                    {
                      "x": 650,
                      "y": 568
                    },
                    {
                      "x": 650,
                      "y": 791
                    },
                    {
                      "x": 558,
                      "y": 791
                    }
                  ]
                },
                "words": [
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 583,
                          "y": 568
                        },
                        {
                          "x": 591,
                          "y": 568
                        },
                        {
                          "x": 591,
                          "y": 598
                        },
                        {
                          "x": 583,
                          "y": 598
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 583,
                              "y": 568
                            },
                            {
                              "x": 591,
                              "y": 568
                            },
                            {
                              "x": 591,
                              "y": 598
                            },
                            {
                              "x": 583,
                              "y": 598
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 598,
                          "y": 568
                        },
                        {
                          "x": 606,
                          "y": 568
                        },
                        {
                          "x": 606,
                          "y": 598
                        },
                        {
                          "x": 598,
                          "y": 598
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 598,
                              "y": 568
                            },
                            {
                              "x": 606,
                              "y": 568
                            },
                            {
                              "x": 606,
                              "y": 598
                            },
                            {
                              "x": 598,
                              "y": 598
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 613,
                          "y": 568
                        },
                        {
                          "x": 634,
                          "y": 568
                        },
                        {
                          "x": 634,
                          "y": 598
                        },
                        {
                          "x": 613,
                          "y": 598
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 613,
                              "y": 568
                            },
                            {
                              "x": 622,
                              "y": 568
                            },
                            {
                              "x": 622,
                              "y": 598
                            },
                            {
                              "x": 613,
                              "y": 598
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 625,
                              "y": 568
                            },
                            {
                              "x": 634,
                              "y": 568
                            },
                            {
                              "x": 634,
                              "y": 598
                            },
                            {
                              "x": 625,
                              "y": 598
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 568,
                          "y": 602
                        },
                        {
                          "x": 594,
                          "y": 602
                        },
                        {
                          "x": 594,
                          "y": 637
                        },
                        {
                          "x": 568,
                          "y": 637
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 568,
                              "y": 602
                            },
                            {
                              "x": 580,
                              "y": 602
                            },
                            {
                              "x": 580,
                              "y": 637
                            },
                            {
                              "x": 568,
                              "y": 637
                            }
                          ]
                        },
                        "text": "3",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 583,
                              "y": 602
                            },
                            {
                              "x": 594,
                              "y": 602
                            },
                            {
                              "x": 594,
                              "y": 637
                            },
                            {
                              "x": 583,
                              "y": 637
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 602,
                          "y": 602
                        },
                        {
                          "x": 611,
                          "y": 602
                        },
                        {
                          "x": 611,
                          "y": 637
                        },
                        {
                          "x": 602,
                          "y": 637
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 602,
                              "y": 602
                            },
                            {
                              "x": 611,
                              "y": 602
                            },
                            {
                              "x": 611,
                              "y": 637
                            },
                            {
                              "x": 602,
                              "y": 637
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 615,
                          "y": 602
                        },
                        {
                          "x": 641,
                          "y": 602
                        },
                        {
                          "x": 641,
                          "y": 637
                        },
                        {
                          "x": 615,
                          "y": 637
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 615,
                              "y": 602
                            },
                            {
                              "x": 627,
                              "y": 602
                            },
                            {
                              "x": 627,
                              "y": 637
                            },
                            {
                              "x": 615,
                              "y": 637
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 630,
                              "y": 602
                            },
                            {
                              "x": 641,
                              "y": 602
                            },
                            {
                              "x": 641,
                              "y": 637
                            },
                            {
                              "x": 630,
                              "y": 637
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 571,
                          "y": 637
                        },
                        {
                          "x": 602,
                          "y": 639
                        },
                        {
                          "x": 600,
                          "y": 673
                        },
                        {
                          "x": 569,
                          "y": 671
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 571,
                              "y": 637
                            },
                            {
                              "x": 585,
                              "y": 638
                            },
                            {
                              "x": 583,
                              "y": 672
                            },
                            {
                              "x": 569,
                              "y": 671
                            }
                          ]
                        },
                        "text": "3",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 589,
                              "y": 638
                            },
                            {
                              "x": 602,
                              "y": 639
                            },
                            {
                              "x": 600,
                              "y": 673
                            },
                            {
                              "x": 587,
                              "y": 672
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 605,
                          "y": 638
                        },
                        {
                          "x": 614,
                          "y": 638
                        },
                        {
                          "x": 612,
                          "y": 672
                        },
                        {
                          "x": 603,
                          "y": 672
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 605,
                              "y": 638
                            },
                            {
                              "x": 614,
                              "y": 638
                            },
                            {
                              "x": 612,
                              "y": 672
                            },
                            {
                              "x": 603,
                              "y": 672
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 617,
                          "y": 639
                        },
                        {
                          "x": 648,
                          "y": 641
                        },
                        {
                          "x": 646,
                          "y": 675
                        },
                        {
                          "x": 615,
                          "y": 673
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 617,
                              "y": 639
                            },
                            {
                              "x": 630,
                              "y": 640
                            },
                            {
                              "x": 628,
                              "y": 674
                            },
                            {
                              "x": 615,
                              "y": 673
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 634,
                              "y": 640
                            },
                            {
                              "x": 648,
                              "y": 641
                            },
                            {
                              "x": 646,
                              "y": 675
                            },
                            {
                              "x": 632,
                              "y": 674
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 558,
                          "y": 676
                        },
                        {
                          "x": 568,
                          "y": 676
                        },
                        {
                          "x": 568,
                          "y": 712
                        },
                        {
                          "x": 558,
                          "y": 712
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 558,
                              "y": 676
                            },
                            {
                              "x": 568,
                              "y": 676
                            },
                            {
                              "x": 568,
                              "y": 712
                            },
                            {
                              "x": 558,
                              "y": 712
                            }
                          ]
                        },
                        "text": "-",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 578,
                          "y": 676
                        },
                        {
                          "x": 597,
                          "y": 676
                        },
                        {
                          "x": 597,
                          "y": 712
                        },
                        {
                          "x": 578,
                          "y": 712
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 578,
                              "y": 676
                            },
                            {
                              "x": 586,
                              "y": 676
                            },
                            {
                              "x": 586,
                              "y": 712
                            },
                            {
                              "x": 578,
                              "y": 712
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.93
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 589,
                              "y": 676
                            },
                            {
                              "x": 597,
                              "y": 676
                            },
                            {
                              "x": 597,
                              "y": 712
                            },
                            {
                              "x": 589,
                              "y": 712
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.92
                      }
                    ],
                    "confidence": 0.92
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 606,
                          "y": 676
                        },
                        {
                          "x": 616,
                          "y": 676
                        },
                        {
                          "x": 616,
                          "y": 712
                        },
                        {
                          "x": 606,
                          "y": 712
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 606,
                              "y": 676
                            },
                            {
                              "x": 616,
                              "y": 676
                            },
                            {
                              "x": 616,
                              "y": 712
                            },
                            {
                              "x": 606,
                              "y": 712
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.92
                      }
                    ],
                    "confidence": 0.92
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 620,
                          "y": 676
                        },
                        {
                          "x": 647,
                          "y": 676
                        },
                        {
                          "x": 647,
                          "y": 712
                        },
                        {
                          "x": 620,
                          "y": 712
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 620,
                              "y": 676
                            },
                            {
                              "x": 632,
                              "y": 676
                            },
                            {
                              "x": 632,
                              "y": 712
                            },
                            {
                              "x": 620,
                              "y": 712
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.93
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 635,
                              "y": 676
                            },
                            {
                              "x": 647,
                              "y": 676
                            },
                            {
                              "x": 647,
                              "y": 712
                            },
                            {
                              "x": 635,
                              "y": 712
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.93
                      }
                    ],
                    "confidence": 0.93
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 578,
                          "y": 713
                        },
                        {
                          "x": 599,
                          "y": 713
                        },
                        {
                          "x": 599,
                          "y": 752
                        },
                        {
                          "x": 578,
                          "y": 752
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 578,
                              "y": 713
                            },
                            {
                              "x": 587,
                              "y": 713
                            },
                            {
                              "x": 587,
                              "y": 752
                            },
                            {
                              "x": 578,
                              "y": 752
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 590,
                              "y": 713
                            },
                            {
                              "x": 599,
                              "y": 713
                            },
                            {
                              "x": 599,
                              "y": 752
                            },
                            {
                              "x": 590,
                              "y": 752
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 609,
                          "y": 713
                        },
                        {
                          "x": 620,
                          "y": 713
                        },
                        {
                          "x": 620,
                          "y": 752
                        },
                        {
                          "x": 609,
                          "y": 752
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 609,
                              "y": 713
                            },
                            {
                              "x": 620,
                              "y": 713
                            },
                            {
                              "x": 620,
                              "y": 752
                            },
                            {
                              "x": 609,
                              "y": 752
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 620,
                          "y": 713
                        },
                        {
                          "x": 649,
                          "y": 713
                        },
                        {
                          "x": 649,
                          "y": 752
                        },
                        {
                          "x": 620,
                          "y": 752
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 620,
                              "y": 713
                            },
                            {
                              "x": 633,
                              "y": 713
                            },
                            {
                              "x": 633,
                              "y": 752
                            },
                            {
                              "x": 620,
                              "y": 752
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 636,
                              "y": 713
                            },
                            {
                              "x": 649,
                              "y": 713
                            },
                            {
                              "x": 649,
                              "y": 752
                            },
                            {
                              "x": 636,
                              "y": 752
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 593,
                          "y": 754
                        },
                        {
                          "x": 603,
                          "y": 754
                        },
                        {
                          "x": 603,
                          "y": 791
                        },
                        {
                          "x": 593,
                          "y": 791
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 593,
                              "y": 754
                            },
                            {
                              "x": 603,
                              "y": 754
                            },
                            {
                              "x": 603,
                              "y": 791
                            },
                            {
                              "x": 593,
                              "y": 791
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 612,
                          "y": 754
                        },
                        {
                          "x": 622,
                          "y": 754
                        },
                        {
                          "x": 622,
                          "y": 791
                        },
                        {
                          "x": 612,
                          "y": 791
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 612,
                              "y": 754
                            },
                            {
                              "x": 622,
                              "y": 754
                            },
                            {
                              "x": 622,
                              "y": 791
                            },
                            {
                              "x": 612,
                              "y": 791
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.91
                      }
                    ],
                    "confidence": 0.91
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 623,
                          "y": 754
                        },
                        {
                          "x": 650,
                          "y": 754
                        },
                        {
                          "x": 650,
                          "y": 791
                        },
                        {
                          "x": 623,
                          "y": 791
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 623,
                              "y": 754
                            },
                            {
                              "x": 635,
                              "y": 754
                            },
                            {
                              "x": 635,
                              "y": 791
                            },
                            {
                              "x": 623,
                              "y": 791
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 638,
                              "y": 754
                            },
                            {
                              "x": 650,
                              "y": 754
                            },
                            {
                              "x": 650,
                              "y": 791
                            },
                            {
                              "x": 638,
                              "y": 791
                            }
                          ]
                        },
                        "text": "0",
                        "confidence": 1
                      }
                    ],
                    "confidence": 1
                  }
                ],
                "confidence": 0.97
              }
            ],
            "blockType": "TEXT",
            "confidence": 0.98
          },
          {
            "boundingBox": {
              "vertices": [
                {
                  "x": 350,
                  "y": 832
                },
                {
                  "x": 491,
                  "y": 832
                },
                {
                  "x": 491,
                  "y": 956
                },
                {
                  "x": 350,
                  "y": 956
                }
              ]
            },
            "paragraphs": [
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 350,
                      "y": 832
                    },
                    {
                      "x": 491,
                      "y": 832
                    },
                    {
                      "x": 491,
                      "y": 914
                    },
                    {
                      "x": 350,
                      "y": 914
                    }
                  ]
                },
                "words": [
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 365,
                          "y": 832
                        },
                        {
                          "x": 491,
                          "y": 832
                        },
                        {
                          "x": 491,
                          "y": 871
                        },
                        {
                          "x": 365,
                          "y": 871
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 365,
                              "y": 832
                            },
                            {
                              "x": 378,
                              "y": 832
                            },
                            {
                              "x": 378,
                              "y": 871
                            },
                            {
                              "x": 365,
                              "y": 871
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 382,
                              "y": 832
                            },
                            {
                              "x": 393,
                              "y": 832
                            },
                            {
                              "x": 393,
                              "y": 871
                            },
                            {
                              "x": 382,
                              "y": 871
                            }
                          ]
                        },
                        "text": "u",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 393,
                              "y": 832
                            },
                            {
                              "x": 406,
                              "y": 832
                            },
                            {
                              "x": 406,
                              "y": 871
                            },
                            {
                              "x": 393,
                              "y": 871
                            }
                          ]
                        },
                        "text": "b",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 413,
                              "y": 832
                            },
                            {
                              "x": 426,
                              "y": 832
                            },
                            {
                              "x": 426,
                              "y": 871
                            },
                            {
                              "x": 413,
                              "y": 871
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 426,
                              "y": 832
                            },
                            {
                              "x": 437,
                              "y": 832
                            },
                            {
                              "x": 437,
                              "y": 871
                            },
                            {
                              "x": 426,
                              "y": 871
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 441,
                              "y": 832
                            },
                            {
                              "x": 454,
                              "y": 832
                            },
                            {
                              "x": 454,
                              "y": 871
                            },
                            {
                              "x": 441,
                              "y": 871
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 456,
                              "y": 832
                            },
                            {
                              "x": 470,
                              "y": 832
                            },
                            {
                              "x": 470,
                              "y": 871
                            },
                            {
                              "x": 456,
                              "y": 871
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 475,
                              "y": 832
                            },
                            {
                              "x": 491,
                              "y": 832
                            },
                            {
                              "x": 491,
                              "y": 871
                            },
                            {
                              "x": 475,
                              "y": 871
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 350,
                          "y": 876
                        },
                        {
                          "x": 425,
                          "y": 876
                        },
                        {
                          "x": 425,
                          "y": 914
                        },
                        {
                          "x": 350,
                          "y": 914
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 350,
                              "y": 876
                            },
                            {
                              "x": 362,
                              "y": 876
                            },
                            {
                              "x": 362,
                              "y": 914
                            },
                            {
                              "x": 350,
                              "y": 914
                            }
                          ]
                        },
                        "text": "S",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 364,
                              "y": 876
                            },
                            {
                              "x": 378,
                              "y": 876
                            },
                            {
                              "x": 378,
                              "y": 914
                            },
                            {
                              "x": 364,
                              "y": 914
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 385,
                              "y": 876
                            },
                            {
                              "x": 397,
                              "y": 876
                            },
                            {
                              "x": 397,
                              "y": 914
                            },
                            {
                              "x": 385,
                              "y": 914
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 397,
                              "y": 876
                            },
                            {
                              "x": 408,
                              "y": 876
                            },
                            {
                              "x": 408,
                              "y": 914
                            },
                            {
                              "x": 397,
                              "y": 914
                            }
                          ]
                        },
                        "text": "e",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 412,
                              "y": 876
                            },
                            {
                              "x": 425,
                              "y": 876
                            },
                            {
                              "x": 425,
                              "y": 914
                            },
                            {
                              "x": 412,
                              "y": 914
                            }
                          ]
                        },
                        "text": "s",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 443,
                          "y": 876
                        },
                        {
                          "x": 486,
                          "y": 876
                        },
                        {
                          "x": 486,
                          "y": 914
                        },
                        {
                          "x": 443,
                          "y": 914
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 443,
                              "y": 876
                            },
                            {
                              "x": 456,
                              "y": 876
                            },
                            {
                              "x": 456,
                              "y": 914
                            },
                            {
                              "x": 443,
                              "y": 914
                            }
                          ]
                        },
                        "text": "T",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 459,
                              "y": 876
                            },
                            {
                              "x": 471,
                              "y": 876
                            },
                            {
                              "x": 471,
                              "y": 914
                            },
                            {
                              "x": 459,
                              "y": 914
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 474,
                              "y": 876
                            },
                            {
                              "x": 486,
                              "y": 876
                            },
                            {
                              "x": 486,
                              "y": 914
                            },
                            {
                              "x": 474,
                              "y": 914
                            }
                          ]
                        },
                        "text": "x",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.99
              },
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 412,
                      "y": 916
                    },
                    {
                      "x": 491,
                      "y": 916
                    },
                    {
                      "x": 491,
                      "y": 956
                    },
                    {
                      "x": 412,
                      "y": 956
                    }
                  ]
                },
                "words": [
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 412,
                          "y": 916
                        },
                        {
                          "x": 491,
                          "y": 916
                        },
                        {
                          "x": 491,
                          "y": 956
                        },
                        {
                          "x": 412,
                          "y": 956
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 412,
                              "y": 916
                            },
                            {
                              "x": 426,
                              "y": 916
                            },
                            {
                              "x": 426,
                              "y": 956
                            },
                            {
                              "x": 412,
                              "y": 956
                            }
                          ]
                        },
                        "text": "T",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 429,
                              "y": 916
                            },
                            {
                              "x": 442,
                              "y": 916
                            },
                            {
                              "x": 442,
                              "y": 956
                            },
                            {
                              "x": 429,
                              "y": 956
                            }
                          ]
                        },
                        "text": "o",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 445,
                              "y": 916
                            },
                            {
                              "x": 458,
                              "y": 916
                            },
                            {
                              "x": 458,
                              "y": 956
                            },
                            {
                              "x": 445,
                              "y": 956
                            }
                          ]
                        },
                        "text": "t",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 462,
                              "y": 916
                            },
                            {
                              "x": 475,
                              "y": 916
                            },
                            {
                              "x": 475,
                              "y": 956
                            },
                            {
                              "x": 462,
                              "y": 956
                            }
                          ]
                        },
                        "text": "a",
                        "confidence": 1
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 478,
                              "y": 916
                            },
                            {
                              "x": 491,
                              "y": 916
                            },
                            {
                              "x": 491,
                              "y": 956
                            },
                            {
                              "x": 478,
                              "y": 956
                            }
                          ]
                        },
                        "text": "l",
                        "confidence": 1
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.99
              }
            ],
            "blockType": "TEXT",
            "confidence": 0.99
          },
          {
            "boundingBox": {
              "vertices": [
                {
                  "x": 572,
                  "y": 834
                },
                {
                  "x": 668,
                  "y": 838
                },
                {
                  "x": 663,
                  "y": 960
                },
                {
                  "x": 567,
                  "y": 956
                }
              ]
            },
            "paragraphs": [
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 572,
                      "y": 834
                    },
                    {
                      "x": 654,
                      "y": 837
                    },
                    {
                      "x": 653,
                      "y": 868
                    },
                    {
                      "x": 571,
                      "y": 865
                    }
                  ]
                },
                "words": [
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 572,
                          "y": 834
                        },
                        {
                          "x": 612,
                          "y": 836
                        },
                        {
                          "x": 611,
                          "y": 867
                        },
                        {
                          "x": 571,
                          "y": 865
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 572,
                              "y": 834
                            },
                            {
                              "x": 580,
                              "y": 834
                            },
                            {
                              "x": 579,
                              "y": 865
                            },
                            {
                              "x": 571,
                              "y": 865
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 580,
                              "y": 834
                            },
                            {
                              "x": 591,
                              "y": 834
                            },
                            {
                              "x": 590,
                              "y": 865
                            },
                            {
                              "x": 579,
                              "y": 865
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.99
                      },
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 597,
                              "y": 835
                            },
                            {
                              "x": 612,
                              "y": 836
                            },
                            {
                              "x": 611,
                              "y": 867
                            },
                            {
                              "x": 596,
                              "y": 866
                            }
                          ]
                        },
                        "text": "9",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 616,
                          "y": 836
                        },
                        {
                          "x": 624,
                          "y": 836
                        },
                        {
                          "x": 623,
                          "y": 867
                        },
                        {
                          "x": 615,
                          "y": 867
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 616,
                              "y": 836
                            },
                            {
                              "x": 624,
                              "y": 836
                            },
                            {
                              "x": 623,
                              "y": 867
                            },
                            {
                              "x": 615,
                              "y": 867
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 631,
                          "y": 836
                        },
                        {
                          "x": 654,
                          "y": 837
                        },
                        {
                          "x": 653,
                          "y": 868
                        },
                        {
                          "x": 630,
                          "y": 867
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 631,
                              "y": 836
                            },
                            {
                              "x": 641,
                              "y": 836
                            },
                            {
                              "x": 640,
                              "y": 867
                            },
                            {
                              "x": 630,
                              "y": 867
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 644,
                              "y": 837
                            },
                            {
                              "x": 654,
                              "y": 837
                            },
                            {
                              "x": 653,
                              "y": 868
                            },
                            {
                              "x": 643,
                              "y": 868
                            }
                          ]
                        },
                        "text": "8",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  }
                ],
                "confidence": 0.99
              },
              {
                "boundingBox": {
                  "vertices": [
                    {
                      "x": 580,
                      "y": 876
                    },
                    {
                      "x": 663,
                      "y": 876
                    },
                    {
                      "x": 663,
                      "y": 956
                    },
                    {
                      "x": 580,
                      "y": 956
                    }
                  ]
                },
                "words": [
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 602,
                          "y": 876
                        },
                        {
                          "x": 611,
                          "y": 876
                        },
                        {
                          "x": 611,
                          "y": 911
                        },
                        {
                          "x": 602,
                          "y": 911
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 602,
                              "y": 876
                            },
                            {
                              "x": 611,
                              "y": 876
                            },
                            {
                              "x": 611,
                              "y": 911
                            },
                            {
                              "x": 602,
                              "y": 911
                            }
                          ]
                        },
                        "text": "5",
                        "confidence": 0.95
                      }
                    ],
                    "confidence": 0.95
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 620,
                          "y": 876
                        },
                        {
                          "x": 629,
                          "y": 876
                        },
                        {
                          "x": 629,
                          "y": 911
                        },
                        {
                          "x": 620,
                          "y": 911
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 620,
                              "y": 876
                            },
                            {
                              "x": 629,
                              "y": 876
                            },
                            {
                              "x": 629,
                              "y": 911
                            },
                            {
                              "x": 620,
                              "y": 911
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.98
                      }
                    ],
                    "confidence": 0.98
                  },
                  {
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 632,
                          "y": 876
                        },
                        {
                          "x": 658,
                          "y": 876
                        },
                        {
                          "x": 658,
                          "y": 911
                        },
                        {
                          "x": 632,
                          "y": 911
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 632,
                              "y": 876
                            },
                            {
                              "x": 644,
                              "y": 876
                            },
                            {
                              "x": 644,
                              "y": 911
                            },
                            {
                              "x": 632,
                              "y": 911
                            }
                          ]
                        },
                        "text": "3",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedBreak": {
                            "type": "EOL_SURE_SPACE"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 647,
                              "y": 876
                            },
                            {
                              "x": 658,
                              "y": 876
                            },
                            {
                              "x": 658,
                              "y": 911
                            },
                            {
                              "x": 647,
                              "y": 911
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.96
                      }
                    ],
                    "confidence": 0.96
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 580,
                          "y": 916
                        },
                        {
                          "x": 619,
                          "y": 916
                        },
                        {
                          "x": 619,
                          "y": 956
                        },
                        {
                          "x": 580,
                          "y": 956
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 580,
                              "y": 916
                            },
                            {
                              "x": 586,
                              "y": 916
                            },
                            {
                              "x": 586,
                              "y": 956
                            },
                            {
                              "x": 580,
                              "y": 956
                            }
                          ]
                        },
                        "text": "1",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 586,
                              "y": 916
                            },
                            {
                              "x": 597,
                              "y": 916
                            },
                            {
                              "x": 597,
                              "y": 956
                            },
                            {
                              "x": 586,
                              "y": 956
                            }
                          ]
                        },
                        "text": "6",
                        "confidence": 0.99
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 603,
                              "y": 916
                            },
                            {
                              "x": 619,
                              "y": 916
                            },
                            {
                              "x": 619,
                              "y": 956
                            },
                            {
                              "x": 603,
                              "y": 956
                            }
                          ]
                        },
                        "text": "4",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 623,
                          "y": 916
                        },
                        {
                          "x": 634,
                          "y": 916
                        },
                        {
                          "x": 634,
                          "y": 956
                        },
                        {
                          "x": 623,
                          "y": 956
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 623,
                              "y": 916
                            },
                            {
                              "x": 634,
                              "y": 916
                            },
                            {
                              "x": 634,
                              "y": 956
                            },
                            {
                              "x": 623,
                              "y": 956
                            }
                          ]
                        },
                        "text": ".",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.99
                  },
                  {
                    "property": {
                      "detectedLanguages": [
                        {
                          "languageCode": "en"
                        }
                      ]
                    },
                    "boundingBox": {
                      "vertices": [
                        {
                          "x": 634,
                          "y": 916
                        },
                        {
                          "x": 663,
                          "y": 916
                        },
                        {
                          "x": 663,
                          "y": 956
                        },
                        {
                          "x": 634,
                          "y": 956
                        }
                      ]
                    },
                    "symbols": [
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ]
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 634,
                              "y": 916
                            },
                            {
                              "x": 647,
                              "y": 916
                            },
                            {
                              "x": 647,
                              "y": 956
                            },
                            {
                              "x": 634,
                              "y": 956
                            }
                          ]
                        },
                        "text": "8",
                        "confidence": 0.96
                      },
                      {
                        "property": {
                          "detectedLanguages": [
                            {
                              "languageCode": "en"
                            }
                          ],
                          "detectedBreak": {
                            "type": "LINE_BREAK"
                          }
                        },
                        "boundingBox": {
                          "vertices": [
                            {
                              "x": 650,
                              "y": 916
                            },
                            {
                              "x": 663,
                              "y": 916
                            },
                            {
                              "x": 663,
                              "y": 956
                            },
                            {
                              "x": 650,
                              "y": 956
                            }
                          ]
                        },
                        "text": "2",
                        "confidence": 0.99
                      }
                    ],
                    "confidence": 0.97
                  }
                ],
                "confidence": 0.97
              }
            ],
            "blockType": "TEXT",
            "confidence": 0.98
          }
        ]
      }
    ],
    "text": "Car Spa 0017\n3690 Beltline Road\n(972) 243-2932\n17-TOUCH2,\nShift 1, Empl 6508,\n05/28/15, 06:50 PM\nSale # 41623648004\n0.00\n0.00\n13.24\n6.75\n48.00\nMobil 1 Pk -TX\n1 Spa Supreme - Tx\n1 Spa Sup. Labor - TX\n1 Spa Sup. Parts - TX\n1 Mobil 1 Synth\n1 Supreme Inspection\n1 Waste Fee\n1 Lube Wash Discount\n5.80 Mobile 1 Ow40 Btl\n1 PRGDOF:POF5581\n1 Exp Carpet Clean\n1 Exp Seat Treat\n1 2 Detail Disc\n1 Emissions - OBD\n1 Sticker - ODB\n2.00\n-6.00\n10.00\n0.00\n39.99\n39.99\n- 19.99\n25.50\n0.00\nSubtotal\nSales Tax\nTotal\n159.48\n5.34\n164.82\n"
  },
  "webDetection": {
    "webEntities": [
      {
        "entityId": "/m/0k4j",
        "score": 0.7593,
        "description": "Car"
      },
      {
        "entityId": "/m/09c7w0",
        "score": 0.729,
        "description": "United States"
      },
      {
        "entityId": "/m/04gcl9",
        "score": 0.704,
        "description": "Receipt"
      },
      {
        "entityId": "/t/251qyjyz5w7tw",
        "score": 0.7011
      },
      {
        "entityId": "/t/26tx7xy9_tgvr",
        "score": 0.671
      },
      {
        "entityId": "/m/056gz",
        "score": 0.6429,
        "description": "Mobil"
      },
      {
        "entityId": "/m/02p642l",
        "score": 0.5961,
        "description": "Mobil 1"
      },
      {
        "entityId": "/m/01fnj5",
        "score": 0.5439,
        "description": "Motor oil"
      },
      {
        "entityId": "/m/0l0xy",
        "score": 0.5103,
        "description": "Diesel fuel"
      },
      {
        "entityId": "/m/018tkd",
        "score": 0.4668,
        "description": "Service"
      },
      {
        "entityId": "/m/0bp_wy",
        "score": 0.3611,
        "description": "Oil"
      },
      {
        "entityId": "/g/120t3_gy",
        "score": 0.2796,
        "description": "Seat"
      },
      {
        "entityId": "/m/01n5cy",
        "score": 0.2692,
        "description": "Carpet"
      },
      {
        "entityId": "/m/0frv80",
        "score": 0.269,
        "description": "Vehicle inspection"
      },
      {
        "entityId": "/m/02d1z8",
        "score": 0.2512,
        "description": "Inspection"
      }
    ],
    "fullMatchingImages": [
      {
        "url": "https://s3-media3.fl.yelpcdn.com/bphoto/yo2YEx_fp31djdNyFOYakg/o.jpg"
      },
      {
        "url": "https://3.bp.blogspot.com/-2vE2oTuAF14/V1CDgSS58TI/AAAAAAAHLkI/xdYD_OG6UMUkhqfI1Cjz_Vh_gDFnlVPzACLcB/s1600/zindagi-phool-mohabbat-khushboo-by-naila-tariq%2B%252814%2529.jpg"
      }
    ],
    "visuallySimilarImages": [
      {
        "url": "https://image.shutterstock.com/image-vector/list-states-united-america-state-260nw-613580648.jpg"
      },
      {
        "url": "https://fair.org/wp-content/uploads/2017/03/NYTMosulRole.jpg"
      },
      {
        "url": "https://thumbs.dreamstime.com/b/united-states-america-anthem-star-spangled-banner-usa-national-words-paper-background-108834611.jpg"
      },
      {
        "url": "https://image.slidesharecdn.com/evolutionofjudicialreviewinunitedstatesofamerica-160429182229/95/evolution-of-judicial-review-in-united-states-of-america-4-638.jpg?cb=1461954539"
      },
      {
        "url": "https://us-east-1.tchyn.io/snopes-production/uploads/2016/10/Fake-African-travel-advisory.jpg"
      },
      {
        "url": "https://blog-assets.busbud.com/wp-content/uploads/2016/06/broken-bridges-damaged-bridges-per-state-745x662.png"
      },
      {
        "url": "https://www.wilsoncenter.org/sites/default/files/styles/800-scale/public/blogs/images/capture2.1.png?itok=HaNHqlXH"
      },
      {
        "url": "https://www.whitehousegiftshop.com/v/vspfiles/assets/images/jan-1-1863-emancipation-proclamation-lincoln-the%20white%20house%20gift%20shop-president-united%20states-news-magazine-photo-article-archives.jpg"
      },
      {
        "url": "https://slideplayer.com/4803414/15/images/3/IN+CONGRESS%2C+JULY+4%2C+1776+The+unanimous+Declaration+of+the+thirteen+united+States+of+America.jpg"
      },
      {
        "url": "https://image.slidesharecdn.com/religionintheus2-110120035744-phpapp02/95/religion-in-the-us-2-4-728.jpg?cb=1295495927"
      },
      {
        "url": "https://1.bp.blogspot.com/-KvZm6iDoo-c/UjDWfDKyCfI/AAAAAAAAHH0/EG1NMuNwar4/s1600/18th+Amendment+Joint+Resolution+Statute.jpg"
      },
      {
        "url": "https://thumbs.dreamstime.com/z/united-states-america-anthem-star-spangled-banner-usa-national-words-paper-background-108834611.jpg"
      },
      {
        "url": "https://slideplayer.com/4803414/15/images/2/IN+CONGRESS%2C+JULY+4%2C+1776+The+unanimous+Declaration+of+the+thirteen+united+States+of+America.jpg"
      },
      {
        "url": "http://www.astrocartography.co.uk/pix/documents/Yale_Dunlap_Broadside.jpg"
      },
      {
        "url": "http://www.bmorrison.com/wp-content/uploads/constitution2.gif"
      },
      {
        "url": "https://www.loc.gov/exhibits/jefferson/images/vc51.jpg"
      },
      {
        "url": "https://loc.gov/exhibits/creating-the-united-states/DeclarationofIndependence/DeclarationLegacy/Assets/us0111_0_enlarge_725.Jpeg"
      },
      {
        "url": "https://www.archives.gov/files/publications/prologue/2005/winter/images/petition-p1-l.jpg"
      },
      {
        "url": "https://c8.alamy.com/comp/FGE98K/the-declaration-of-independence-of-united-states-of-america-july-4-FGE98K.jpg"
      },
      {
        "url": "https://s3-media4.fl.yelpcdn.com/bphoto/bDiMbtCUQ_GohyCp2E4iFg/348s.jpg"
      }
    ],
    "bestGuessLabels": [
      {
        "label": "United States of America"
      }
    ]
  }
} -->
