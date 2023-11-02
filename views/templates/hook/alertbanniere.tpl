<div id="custom-alert-banner">
    <div class="custom-alert-content">
        <p>{$MESSAGE}  <a href={$URL_DU_LIEN}>{$LABEL}</a></p>
    </div>
    <span class="close-alert">X</span>
</div>

<style>
#custom-alert-banner {
    background-color: #00FFFF;
    padding: 1px;
    position: absolute;
    top: 120px; 
    width: 100%;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
}

.custom-alert-content {
    text-align: center;
    flex-grow: 1; 
}

.custom-alert-content a {
    text-decoration: underline;
}

.close-alert {
    cursor: pointer;
    padding: 5px;
}
</style>