<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css">
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>
</head>
<body>
<script type="text/javascript" charset="utf-8">
    webix.ui({
        rows:[
            { view:"template",
                type:"header", template:"My App!" },
            {
                view:"toolbar",
                id:"myToolbar",
                cols:[
                    { view:"button", id:"LoadBut", value:"Load", width:100, align:"left" },
                    { view:"button", value:"Save", width:100, align:"center" },
                    { view:"button", value:"Info", width:100, align:"right" }]
            },

            { view:"datatable",
                autoConfig:true,
                data:{
                    title:"My Fair Lady", year:1964, votes:533848, rating:8.9, rank:5
                }
            },

        ],

    });
</script>
</body>
</html>