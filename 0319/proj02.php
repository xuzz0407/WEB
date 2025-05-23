<?php
    session_start();

    if (!isset($_SESSION['NUM1']))
    {
        $_SESSION['NUM1'] = 1;
        $_SESSION['NUM2'] = 1;
        $_SESSION['currloop'] = 1;
    }
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 內容顯示</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500;700&display=swap');
    
    body {
        font-family: 'Noto Sans TC', 'Microsoft JhengHei', Arial, sans-serif;
        font-size: 16px;
        line-height: 1.6;
        color: #333;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f0f5f9;
    }
    
    h1 {
        color: #1a5276;
        text-align: center;
        margin-bottom: 30px;
        font-size: 2.5em;
        position: relative;
        padding-bottom: 15px;
    }
    
    h1:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background-color: #3498db;
    }

    .school-id {
        text-align: center;
        margin-bottom: 25px;
    }

    .student-id {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        font-size: 1.5em;
        color: #2c3e50;
    }

    .class-code {
        background: linear-gradient(135deg, #3498db, #2980b9);
        color: white;
        padding: 8px 15px;
        border-radius: 6px;
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    }
    
    .session-content {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        margin-bottom: 25px;
        text-align: center;
    }
    
    .session-content pre {
        font-size: 1.2em;
        color: #2c3e50;
        text-align: left;
        background-color: #f7f9fa;
        padding: 15px;
        border-radius: 6px;
        border: 1px solid #e0e0e0;
    }
    
    button {
        padding: 12px 25px;
        margin: 10px 5px;
        border-radius: 6px;
        border: none;
        font-size: 1em;
        font-family: inherit;
        transition: all 0.3s ease;
        cursor: pointer;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .home-button {
        background: linear-gradient(135deg, #95a5a6, #7f8c8d);
        color: white;
    }
    
    .home-button:hover {
        background: linear-gradient(135deg, #7f8c8d, #95a5a6);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    .buttons-container {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 25px;
    }
    </style>
</head>
<body>
    <h1>Session 內容顯示</h1>
    <div class="school-id">
        <h2 class="student-id">
            <span class="class-code">I3A07 徐士洧</span>
        </h2>
    </div>

    <div class="session-content">
        <pre>
            <?php
                print_r($_SESSION);
            ?>
        </pre>
    </div>

    <div class="buttons-container">
        <form action="index.php" method="GET">
            <button type="submit" class="home-button">回首頁</button>
        </form>
    </div>
</body>
</html>