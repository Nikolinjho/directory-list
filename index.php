<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Ubuntu', sans-serif;
        color: #223026;
        font-size: 16px;
        line-height: 21px;
        background-color: #EDFAF1;
        -webkit-font-smoothing: antialiased;
    }

    .container {
        width: 540px;
        margin: 0 auto;
    }

    .list {}

    .list-item {
        position: relative;
        display: flex;
        flex-wrap: wrap;
    }
    


    .list-item__link {
        display: flex;
        width: 100%;
        min-height: 50px;
        padding-top: 15px;
        text-decoration: none;
        border-top: 1px solid #d0e2d5;
        color: #000000;
    }

    .list-item__link:hover{
        background: #d5f1de;
    }

    .list-item_folder-open {
        /* display: block; */
    }

    .list-item_folder-open>.list-item__hidden {
        display: block;
    }

    .list-item__icon {
        width: 16px;
        height: 16px;
        margin-right: 9px;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxNHB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxNCAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4gICAgICAgIDx0aXRsZT5wYWdlPC90aXRsZT4gICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+ICAgIDxkZWZzPjwvZGVmcz4gICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+ICAgICAgICA8ZyBpZD0iYmxvY2siIHRyYW5zZm9ybT0idHJhbnNsYXRlKC02Ni4wMDAwMDAsIC0xNjkuMDAwMDAwKSIgZmlsbD0iIzIyMzAyNiI+ICAgICAgICAgICAgPGcgaWQ9InJvdy1jb3B5IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Ni4wMDAwMDAsIDE1Mi4wMDAwMDApIj4gICAgICAgICAgICAgICAgPHBhdGggZD0iTTEzLjksMjIuNiBDMTMuOCwyMi41IDEzLjgsMjIuNCAxMy43LDIyLjMgTDguNywxNy4zIEM4LjYsMTcuMiA4LjUsMTcuMSA4LjQsMTcuMSBDOC4zLDE3IDguMSwxNyA4LDE3IEwxLDE3IEMwLjQsMTcgMCwxNy40IDAsMTggTDAsMzIgQzAsMzIuNiAwLjQsMzMgMSwzMyBMMTMsMzMgQzEzLjYsMzMgMTQsMzIuNiAxNCwzMiBMMTQsMjMgQzE0LDIyLjkgMTQsMjIuNyAxMy45LDIyLjYgTDEzLjksMjIuNiBaIE05LDIwLjQgTDEwLjYsMjIgTDksMjIgTDksMjAuNCBMOSwyMC40IFogTTEyLDMxIEwyLDMxIEwyLDE5IEw3LDE5IEw3LDIzIEM3LDIzLjYgNy40LDI0IDgsMjQgTDEyLDI0IEwxMiwzMSBMMTIsMzEgWiIgaWQ9InBhZ2UiPjwvcGF0aD4gICAgICAgICAgICA8L2c+ICAgICAgICA8L2c+ICAgIDwvZz48L3N2Zz4=);
        background-repeat: no-repeat;
        background-position: center;
        position: relative;
        bottom: -2px;
    }

    .list-item_folder>.list-item__link .list-item__icon {
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE1cHgiIHZpZXdCb3g9IjAgMCAxNiAxNSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4gICAgICAgIDx0aXRsZT5mb2xkZXI8L3RpdGxlPiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4gICAgPGRlZnM+PC9kZWZzPiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4gICAgICAgIDxnIGlkPSJibG9jayIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTY2LjAwMDAwMCwgLTExOS4wMDAwMDApIiBmaWxsPSIjMDJBQjM2Ij4gICAgICAgICAgICA8ZyBpZD0icm93IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Ni4wMDAwMDAsIDEwMi4wMDAwMDApIj4gICAgICAgICAgICAgICAgPHBhdGggZD0iTTE1LDE3IEw5LDE3IEM4LjYsMTcgOC4zLDE3LjIgOC4xLDE3LjYgTDcuNCwxOSBMMSwxOSBDMC40LDE5IDAsMTkuNCAwLDIwIEwwLDIzIEwwLDMxIEMwLDMxLjYgMC40LDMyIDEsMzIgTDE1LDMyIEMxNS42LDMyIDE2LDMxLjYgMTYsMzEgTDE2LDE4IEMxNiwxNy40IDE1LjYsMTcgMTUsMTcgTDE1LDE3IFogTTgsMjEgQzguNCwyMSA4LjcsMjAuOCA4LjksMjAuNCBMOS42LDE5IEwxNCwxOSBMMTQsMjIgTDIsMjIgTDIsMjEgTDgsMjEgTDgsMjEgWiBNMiwzMCBMMiwyNCBMMTQsMjQgTDE0LDMwIEwyLDMwIEwyLDMwIFoiIGlkPSJmb2xkZXIiPjwvcGF0aD4gICAgICAgICAgICA8L2c+ICAgICAgICA8L2c+ICAgIDwvZz48L3N2Zz4=);
    }

    .list-item >.list-item__link .list-item__text-span{
        border-bottom: 1px solid #8e8e8e;
        
    }
    .list-item_folder>.list-item__link .list-item__text-span{
        border-bottom: 1px dashed #75b388;
        color: #0ea23b;
    }

    .list-item_folder>.list-item__link::after {
        content: '';
        width: 12px;
        height: 12px;
        position: absolute;
        top: 20px;
        right: 15px;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxMnB4IiBoZWlnaHQ9IjEycHgiIHZpZXdCb3g9IjAgMCAxMiAxMiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4gICAgICAgIDx0aXRsZT5wbHVzPC90aXRsZT4gICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+ICAgIDxkZWZzPjwvZGVmcz4gICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+ICAgICAgICA8ZyBpZD0iYmxvY2siIHRyYW5zZm9ybT0idHJhbnNsYXRlKC01MDAuMDAwMDAwLCAtMTIzLjAwMDAwMCkiIGZpbGw9IiMwMkFCMzYiPiAgICAgICAgICAgIDxnIGlkPSJyb3ciIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY2LjAwMDAwMCwgMTAyLjAwMDAwMCkiPiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNDQ1LDI2IEw0NDEsMjYgTDQ0MSwyMiBDNDQxLDIxLjQgNDQwLjYsMjEgNDQwLDIxIEM0MzkuNCwyMSA0MzksMjEuNCA0MzksMjIgTDQzOSwyNiBMNDM1LDI2IEM0MzQuNCwyNiA0MzQsMjYuNCA0MzQsMjcgQzQzNCwyNy42IDQzNC40LDI4IDQzNSwyOCBMNDM5LDI4IEw0MzksMzIgQzQzOSwzMi42IDQzOS40LDMzIDQ0MCwzMyBDNDQwLjYsMzMgNDQxLDMyLjYgNDQxLDMyIEw0NDEsMjggTDQ0NSwyOCBDNDQ1LjYsMjggNDQ2LDI3LjYgNDQ2LDI3IEM0NDYsMjYuNCA0NDUuNiwyNiA0NDUsMjYgTDQ0NSwyNiBaIiBpZD0icGx1cyI+PC9wYXRoPiAgICAgICAgICAgIDwvZz4gICAgICAgIDwvZz4gICAgPC9nPjwvc3ZnPg==);
        background-repeat: no-repeat;
        background-position: center;
    }

    .list-item_folder-open>.list-item__link::after {
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxMnB4IiBoZWlnaHQ9IjJweCIgdmlld0JveD0iMCAwIDEyIDIiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+ICAgICAgICA8dGl0bGU+bWludXM8L3RpdGxlPiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4gICAgPGRlZnM+PC9kZWZzPiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4gICAgICAgIDxnIGlkPSJibG9jayIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTUyMC4wMDAwMDAsIC0xMjguMDAwMDAwKSIgZmlsbD0iIzAyQUIzNiI+ICAgICAgICAgICAgPGcgaWQ9InJvdyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjYuMDAwMDAwLCAxMDIuMDAwMDAwKSI+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00NTUsMjYgQzQ1NC40LDI2IDQ1NCwyNi40IDQ1NCwyNyBDNDU0LDI3LjYgNDU0LjQsMjggNDU1LDI4IEw0NjUsMjggQzQ2NS42LDI4IDQ2NiwyNy42IDQ2NiwyNyBDNDY2LDI2LjQgNDY1LjYsMjYgNDY1LDI2IEw0NTUsMjYgWiIgaWQ9Im1pbnVzIj48L3BhdGg+ICAgICAgICAgICAgPC9nPiAgICAgICAgPC9nPiAgICA8L2c+PC9zdmc+) !important;
    }



    .list-item__hidden {
        display: none;
        margin-left: 25px;
        width: 100%;
    }
</style>

<body>
    <div class="container">

        <?php


        function listFolderFiles($dir)
        {
            $temp = array_diff(scandir($dir, 2), array('..', '.', 'index.php','.htaccess'));;
            
            $arrFiles = [];
            $arrFolders = [];


            foreach($temp as $file){
                if (is_dir($dir . DIRECTORY_SEPARATOR . $file)){
                    $arrFolders[] = $file;
                } else {
                    $arrFiles[] = $file;
                }
            }

            $ffs = array_merge($arrFolders, $arrFiles);


            // prevent empty ordered elements
            if (count($ffs) < 1)
                return;

            foreach ($ffs as $ff) {
                $curDir = str_replace($_SERVER['DOCUMENT_ROOT'], '', $dir);
                if (is_dir($dir . '/' . $ff)) {
                    echo '<div class="list-item list-item_folder">';
                        echo '<a href="'.$curDir.'/'.$ff.'" class="list-item__link">';
                            echo '<div class="list-item__icon"></div>';
                            echo '<div class="list-item__text">';
                                echo '<span class="list-item__text-span">' . $ff . '</span>';
                            echo '</div>';
                        echo '</a>';
                        echo '<div class="list-item__hidden">';
                            listFolderFiles($dir . '/' . $ff);
                        echo '</div>';
                    echo '</div>';
                } else {
                    echo '<div class="list-item">';
                        echo '<a href="'.$curDir.'/'. $ff . '" class="list-item__link">';
                            echo '<div class="list-item__icon"></div>';
                            echo '<div class="list-item__text">';
                                echo '<span class="list-item__text-span">' . $ff . '</span>';
                            echo '</div>';
                        echo '</a>';
                    echo '</div>';
                }
            }
        }
        echo '<div class="list">';
        listFolderFiles(__DIR__);
        echo '</div>';

        ?>
    </div>



    <script>
        const list = document.querySelector('.list')

        list.addEventListener('click', function(e) {
            const el = e.target.closest('.list-item__link')
            if (el) {
                const parent = el.parentNode;
                if (parent.classList.contains('list-item_folder')) {
                    parent.classList.toggle('list-item_folder-open')
                    e.preventDefault()
                }
            }
        })
    </script>
</body>

</html>
