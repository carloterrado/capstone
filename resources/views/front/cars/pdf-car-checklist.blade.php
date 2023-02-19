<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        *{
            font-size: 12px;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .row{
            max-width: 800px;
            display: flex;
            margin: auto;
            justify-content: space-between;
        }
        .img{
            width: 45%;
            border: 1px solid black;
        }
        img{
            width: 100%;
            margin: auto;

        }

        .parts-container{
            width: 50%;
        }
        .parts-header{
            padding: 8px;
            background: #e84949;
            border-radius: 4px 4px 0 0 ;
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            
        }
        .part{
            display: flex;
            padding: 8px;
            border: 1px solid #000;
            border-top: none;
        }
        .label{
            width: 140px;
        }
        .issue{
            display: flex;
            align-items: center;
        }
        span{
            margin-right: 3px;
           
        }
        input{
          
            margin-right: 10px;
            width: 10px;
           
        }
        .border{
            border: 1px solid #000;
        }



    </style>
</head>
<body>
    
    <div class="row">
        <div class="img">
            <img src="https://images.pexels.com/photos/15588318/pexels-photo-15588318.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="Example Image">
        </div>
        <div class="parts-container">
            <h2 class="parts-header">Front</h2>
            <div class="part">
                <div class="label">34. Front Exterior Lights</div>
                <div class="issue">
                    <span>A</span><input type="checkbox" >
                    <span>B</span><input type="checkbox" >
                    <span>C</span><input type="checkbox" >
                    <span>D</span><input type="checkbox" >
                    <span>E</span><input type="checkbox" >
                    <span>F</span><input type="checkbox" >
                </div>
            </div>
            <div class="part">
                <div class="label">34. Front Exterior Lights</div>
                <div class="issue">
                    <span>A</span><input type="checkbox" >
                    <span>B</span><input type="checkbox" >
                    <span>C</span><input type="checkbox" >
                    <span>D</span><input type="checkbox" >
                    <span>E</span><input type="checkbox" >
                    <span>F</span><input type="checkbox" >
                </div>
            </div>
            <div class="part">
                <div class="label">34. Front Exterior Lights</div>
                <div class="issue">
                    <span>A</span><input type="checkbox" >
                    <span>B</span><input type="checkbox" >
                    <span>C</span><input type="checkbox" >
                    <span>D</span><input type="checkbox" >
                    <span>E</span><input type="checkbox" >
                    <span>F</span><input type="checkbox" >
                </div>
            </div>
            <div class="part">
                <div class="label">34. Front Exterior Lights</div>
                <div class="issue">
                    <span>A</span><input type="checkbox" >
                    <span>B</span><input type="checkbox" >
                    <span>C</span><input type="checkbox" >
                    <span>D</span><input type="checkbox" >
                    <span>E</span><input type="checkbox" >
                    <span>F</span><input type="checkbox" >
                </div>
            </div>
            <div class="part">
                <div class="label">34. Front Exterior Lights</div>
                <div class="issue">
                    <span>A</span><input type="checkbox" >
                    <span>B</span><input type="checkbox" >
                    <span>C</span><input type="checkbox" >
                    <span>D</span><input type="checkbox" >
                    <span>E</span><input type="checkbox" >
                    <span>F</span><input type="checkbox" >
                </div>
            </div>
        </div>
   </div>
      
    
</body>
</html>