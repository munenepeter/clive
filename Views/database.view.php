<?php

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php';
include_once 'sections/sidebar.view.php'; ?>
<style>
    #codeEditor,
    #lineCounter {
        font-family: lucida console, courier new, courier, monospace;
        margin: 0;
        padding: 10px 0;
        height: 35vh;
        border-radius: 0;
        resize: none;
        font-size: 16px;
        line-height: 1.2;
        outline: none;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    #lineCounter:focus-visible,
    #codeEditor:focus-visible {
        outline: none;
    }

    #lineCounter {
        display: flex;
        border-color: transparent;
        overflow-y: hidden;
        text-align: right;
        box-shadow: none;
        color: #707070;
        background-color: #d8d8d8;
        position: absolute;
        width: 2rem;
        background-color: #3E3D32;
        border-color: #3E3D32;
        color: #928869;
    }

    #codeEditor {
        padding-left: calc(2rem + 5px);
        background-color: #272822;
        border-color: #272822;
        color: #ffffff;
    }
</style>

<div class="w-full p-2 bg-gradient-to-r from-red-50 to-blue-50 overflow-auto border">
    <form action="" method="post" class="mb-4">
        <textarea class="rounded-lg" id='lineCounter' wrap='off' readonly>1.</textarea>

        <textarea name="query" class="w-full" id='codeEditor' wrap='off'><?= (isset($sql)) ? trim($sql) : ''; ?>
        </textarea>

        <button style="float: right;" type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Run</button>
    </form>

    <div class="mt-4">
        <div class="my-2 w-full h-72 overflow-y-auto bg-white shadow-md sm:rounded-lg">
            <?php
            if (!isset($results) && isset($error)) {
                echo $error;
            } elseif (isset($results)) {
                echo build_table($results);
            }
            ?>
        </div>
    </div>
</div>

</div>
</div>
<script>
    var codeEditor = document.getElementById('codeEditor');
    var lineCounter = document.getElementById('lineCounter');

    codeEditor.addEventListener('scroll', () => {
        lineCounter.scrollTop = codeEditor.scrollTop;
        lineCounter.scrollLeft = codeEditor.scrollLeft;
    });

    codeEditor.addEventListener('keydown', (e) => {
        let {
            keyCode
        } = e;
        let {
            value,
            selectionStart,
            selectionEnd
        } = codeEditor;
        if (keyCode === 9) { // TAB = 9
            e.preventDefault();
            codeEditor.value = value.slice(0, selectionStart) + '\t' + value.slice(selectionEnd);
            codeEditor.setSelectionRange(selectionStart + 2, selectionStart + 2)
        }
    });

    var lineCountCache = 0;

    function line_counter() {
        var lineCount = codeEditor.value.split('\n').length;
        var outarr = new Array();
        if (lineCountCache != lineCount) {
            for (var x = 0; x < lineCount; x++) {
                outarr[x] = (x + 1) + '.';
            }
            lineCounter.value = outarr.join('\n');
        }
        lineCountCache = lineCount;
    }
    codeEditor.addEventListener('input', () => {
        line_counter();
    });
</script>
</body>

</html>