import qrcode

# pip3 install "qrcode[pil]"

qr = qrcode.QRCode(
    version=1,
    box_size=5,
    border=10,
)

data = 'https://www.eliteprospects.com/player/1041146/nicholas-quagliariello'

qr.add_data(data)
qr.make(fit=True)

img = qr.make_image()
img.save('qr-test.png')