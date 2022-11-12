from PIL import Image
import pytesseract

image_1='image1.png'
Image.open(image_1)

img_obj1=Image.open(image_1)
text1=pytesseract.image_to_string(img_obj1)
print(text1)
