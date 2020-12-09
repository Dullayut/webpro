<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<!-- แสดงข้อมูลสินค้า -->
<style>
    * {
        margin: 0;
        padding: 0;
    }

    html {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 0;
        padding: 0;
        height: 100hv;
        align-items: center;
        align-content: center;
        font-family: 'Prompt', sans-serif;

    }

    .card_product_detail {
        background: #f6f6f6;
        height: 95%;
        width: 100%;
        padding: 20px;
        border: 4px solid #003559;
        display: flex;
        margin-top: 3%;
        margin-left: 5%;

    }

    .card_product_detail .img_detail,
    .card_product_detail .infos {
        width: 50%;
    }


    .infos {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: clip;

    }

    .infos p {
        text-align: left;
        font-size: 12px;
    }

    .name_detail {
        font-size: 24px;
        font-weight: bold;
        text-align: left;
    }

    .price_detail {
        font-size: 21px;
        font-weight: bold;
        text-align: left;
        color: red;
    }

    .guarantee {
        text-align: left;
    }

    .buttons_detail {
        height: 50px;
        width: 150px;
        align-items: center;
        align-content: center;
        font-size: 16px;
        font-weight: bold;
        border: none;
        background: #ff9d47;
        border-radius: 10px;
    }

    .buttons_detail a {
        color: #003559;
    }

    .buttons_detail a:hover {
        color: white;
        text-decoration: none;
    }

    .img_detail img {
        width: 85%;
        height: 60%;
        margin-top: 22%;
        margin-right: 10%;
    }
</style>

<!-- รายละเอียดสินค้า -->
<style>
    .discription {
        background: #003559;
        color: #fff;
        width: 69%;
        height: 50px;
        margin-left: 24%;
        margin-top: 3%;
        align-items: center;
        margin-bottom: 40%;
    }

    .discription h3 {
        text-align: left;
        padding: 15px 45px;
    }

    .discription_table {
        border-collapse: collapse;
        width: 100%;
        border: 4px solid #003559;
        font-size: 13px;
    }

    .discription_table td,
    th {
        border: 1px solid #003559;
        text-align: left;
        padding: 8px;
    }

    .discription_table td:first-child {
        width: 20%;
        font-weight: bold;

    }
</style>

<!-- card right -->
<style>
    .card_right_table {
        border-collapse: collapse;
        width: 80%;
        height: 50%;
        border: 4px solid #003559;
        font-size: 14px;
        margin-left: 10%;
        margin-top: 7%;
    }

    .card_right_table td {
        font-size: 14px;
        text-align: left;
        padding: 12px 30px;
    }

    #thumbs_up_icon1 {
        font-size: 30px;
        color: #ff9d47;
        line-height: 1.6;
    }

    #truck_icon {
        font-size: 30px;
        color: #ff9d47;
    }

    #exchange_icon {
        font-size: 30px;
        color: #ff9d47;
    }

    #creditcard_icon1 {
        font-size: 30px;
        color: #ff9d47;
    }
    .pay p{
        line-height: 80%;
    }
</style>