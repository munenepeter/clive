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
        height: 75vh;
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
        width: 1.5rem;
        /* Determine appearance of line counter */
        background-color: #3E3D32;
        border-color: #3E3D32;
        color: #928869;
    }

    #codeEditor {
        padding-left: calc(3.5rem + 5px);
        width: 100%;
        /* Determine appearance of code editor */
        background-color: #272822;
        border-color: #272822;
        color: #ffffff;
    }
</style>

<div class="m-2 p-2 bg-white overflow-auto border">
    <textarea id='lineCounter' wrap='off' readonly>1.</textarea>
    <textarea class="w-full" id='codeEditor' wrap='off'></textarea>
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