<style>
    /* CSS untuk styling popup */
    .popup {
        display: <?php echo $showPopup ? 'block' : 'none'; ?>;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        width: 100%;
        text-align: center;
        animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translate(-50%, -60%);
        }
        100% {
            opacity: 1;
            transform: translate(-50%, -50%);
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
            transform: translate(-50%, -50%);
        }
        100% {
            opacity: 0;
            transform: translate(-50%, -40%);
        }
    }

    /* Tombol close */
    .popup button {
        border: none;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        border-radius: 5px;
        outline: none;
    }

    .popup button.accept {
        background-color: #4CAF50;
        color: white;
    }

    .popup button.reject {
        background-color: #f44336;
        color: white;
    }
</style>
<div id="cookie-popup" class="popup">
    <h2>Persetujuan Penggunaan Cookies</h2>
    <p>Kami menggunakan cookies untuk meningkatkan pengalaman pengguna. Dengan melanjutkan, Anda menyetujui penggunaan cookies.</p>
    <form method="post">
        <input type="hidden" name="action" value="accept_cookies">
        <button type="submit" class="accept">Oke dimengerti</button>
    </form>
</div>
