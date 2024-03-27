<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset ($user_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>RelishoNatura | About</title>

   <link rel="icon" href="images/logo_02.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<style>
   .title {
      color: green;
      margin-top: 20px;
      text-align: center;
   }

   body {
      margin: 0;
      font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
   }



   * {
      box-sizing: border-box;
   }

   .main {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #efefef;
      overflow: hidden;
      height: 50vh;
      width: 100vw;
   }

   .testimonials {
      background-color: #ffffff;
      width: 100%;
      max-width: 740px;
      margin: 20px;
      box-shadow: 0 6px 5px -7px #cbcbcb;
      border-radius: 3px;
      position: relative;
      opacity: 0;
      animation: showTestimonials 0.32s 0.78s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards;

      input {
         display: none;
         visibility: hidden;
         height: 0;
         width: 0;
         pointer-events: none;
         opacity: 0;
      }
   }

   @keyframes showTestimonials {
      to {
         opacity: 1;
      }
   }

   .testimonials-inner {
      position: relative;
      min-height: 100px;
   }

   .testimonial {
      padding: 40px 34px 20px 34px;
      margin: 0 30px;
      pointer-events: none;
      position: relative;
      z-index: 1;
   }

   input[name="testimonial"]:nth-child(1):checked~.testimonials-inner .testimonial:nth-child(1),
   input[name="testimonial"]:nth-child(2):checked~.testimonials-inner .testimonial:nth-child(2),
   input[name="testimonial"]:nth-child(3):checked~.testimonials-inner .testimonial:nth-child(3),
   input[name="testimonial"]:nth-child(4):checked~.testimonials-inner .testimonial:nth-child(4) {
      pointer-events: initial;
   }

   .testimonial {
      transition: 0.72s cubic-bezier(0.215, 0.61, 0.355, 1), opacity 0.32s 0.12s;
      opacity: 0;
      transform: translate(0, 38px);
      max-height: 80px;
      animation: hideTestimonial 0s 0.52s forwards;
      position: relative;
   }

   input[name="testimonial"]:nth-child(1):checked~.testimonials-inner .testimonial:nth-child(1),
   input[name="testimonial"]:nth-child(2):checked~.testimonials-inner .testimonial:nth-child(2),
   input[name="testimonial"]:nth-child(3):checked~.testimonials-inner .testimonial:nth-child(3),
   input[name="testimonial"]:nth-child(4):checked~.testimonials-inner .testimonial:nth-child(4) {
      animation: showTestimonial 0s 0.72s forwards;
      position: absolute;
      opacity: 1;
      transform: none;
      max-height: 500px;
      transition: 0.3s 0.52s, opacity 0.68s 0.92s, max-height 0.82s 0.72s;
   }

   @keyframes hideTestimonial {
      to {
         position: absolute;
      }
   }

   @keyframes showTestimonial {
      to {
         position: relative;
      }
   }

   input[name="testimonial"]:nth-child(1):checked~.testimonials-bullets label:nth-child(1) span,
   input[name="testimonial"]:nth-child(2):checked~.testimonials-bullets label:nth-child(2) span,
   input[name="testimonial"]:nth-child(3):checked~.testimonials-bullets label:nth-child(3) span,
   input[name="testimonial"]:nth-child(4):checked~.testimonials-bullets label:nth-child(4) span {
      background-color: rgba(245, 34, 34, 0.836);
      transform: scale(1);
      transition: transform 0.36s cubic-bezier(0.26, -0.59, 0.43, 2.48),
         background-color 0.41s ease-in;
   }

   .testimonial-photo {
      height: 84px;
      width: 84px;
      position: absolute;
      top: -32px;
      left: 0;
      right: 0;
      margin: 0 auto;
   }

   .photo-background {
      background-color: #ffffff;
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 50%;
      height: 100%;
      box-shadow: 0 -4px 3px -2px #c3c2c2;
      width: 100%;
      transform: scale(0.87);
      transition: 0.32s;
   }

   input[name="testimonial"]:nth-child(1):checked~.testimonials-inner .testimonial:nth-child(1) .photo-background,
   input[name="testimonial"]:nth-child(2):checked~.testimonials-inner .testimonial:nth-child(2) .photo-background,
   input[name="testimonial"]:nth-child(3):checked~.testimonials-inner .testimonial:nth-child(3) .photo-background,
   input[name="testimonial"]:nth-child(4):checked~.testimonials-inner .testimonial:nth-child(4) .photo-background {
      transform: scale(1);
      transition: 0s;
   }

   .photo-author {
      background-size: 68px;
      background-position: center;
      height: 0;
      width: 0;
      border-radius: 50%;
      background-color: #dbdbdb;
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      margin: auto;
      opacity: 0;
      transform: scale(1.18) translate(0, -6px);
      transition: transform 0.42s ease-out, opacity 0.58s, width 0s 0.6s,
         height 0s 0.6s;
   }

   input[name="testimonial"]:nth-child(1):checked~.testimonials-inner .testimonial:nth-child(1) .photo-author,
   input[name="testimonial"]:nth-child(2):checked~.testimonials-inner .testimonial:nth-child(2) .photo-author,
   input[name="testimonial"]:nth-child(3):checked~.testimonials-inner .testimonial:nth-child(3) .photo-author,
   input[name="testimonial"]:nth-child(4):checked~.testimonials-inner .testimonial:nth-child(4) .photo-author {
      transform: scale(1);
      opacity: 1;
      height: 68px;
      width: 68px;
      transition: width 0.26s 1.01s, height 0.26s 1.01s;
   }

   .testimonial-text {
      color: #606060;
      font-size: 20px;
      text-align: center;
      text-shadow: 0 0 1px #939393;
      letter-spacing: 0.12px;
      font-style: italic;
      line-height: 26px;

      p {
         margin-bottom: 10px;
      }
   }

   .testimonial-author {
      font-size: 15px;
      text-align: right;
      color: #bdbdbd;
      letter-spacing: 0.24px;
      text-transform: uppercase;
      text-shadow: 0 0 1px #e3e3e3;

      &:before {
         content: "– ";
      }
   }

   .testimonials-bullets {
      display: flex;
      justify-content: center;
      width: 100%;
      height: 30px;
      transform: translate(0, 8px);

      .bullet {
         height: 30px;
         width: 30px;
         cursor: pointer;
         margin: 0 1px;

         div {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 30px;
            width: 30px;
            border-radius: 50%;
            background-color: #ffffff;
            box-shadow: 0 4px 6px -7px #000000;

            span {
               background-color: #c3c3c3;
               height: 14px;
               width: 14px;
               border-radius: 50%;
               transform: scale(0.82);
               transition: 0.72s;
            }
         }

         &:hover span {
            background-color: rgba(216, 118, 118, 0.836);
         }
      }
   }

   .testimonials-arrows {
      height: 100%;

      .arrow {
         display: flex;
         align-items: center;
         justify-content: center;
         height: 50px;
         width: 50px;
         position: absolute;
         top: calc(50% - 25px);

         span {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            border-radius: 50%;
            height: 40px;
            width: 40px;

            &:before {
               font-size: 32px;
               font-family: monospace, sans-serif;
               font-weight: 600;
               color: #c3c3c3;
               transition: color 0.21s ease-in;
            }
         }

         &:hover span:before {
            color: #444444;
            transition: color 0.17s ease-out;
         }

         label {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            cursor: pointer;
         }
      }

      .arrow-left {
         left: -20px;

         span {
            box-shadow: 40px 0 20px 20px #ffffff, -5px 0 30px 0px #e1e1e1;

            &:before {
               content: "<";
            }
         }
      }

      .arrow-right {
         right: -20px;

         span {
            box-shadow: -40px 0 20px 20px #ffffff, 5px 0 30px 0px #e1e1e1;

            &:before {
               content: ">";
            }
         }
      }
   }

   input[name="testimonial"]:nth-child(1):checked~.testimonials-arrows .arrow-left label[for="input-testimonial4"],
   input[name="testimonial"]:nth-child(1):checked~.testimonials-arrows .arrow-right label[for="input-testimonial2"],
   input[name="testimonial"]:nth-child(2):checked~.testimonials-arrows .arrow-left label[for="input-testimonial1"],
   input[name="testimonial"]:nth-child(2):checked~.testimonials-arrows .arrow-right label[for="input-testimonial3"],
   input[name="testimonial"]:nth-child(3):checked~.testimonials-arrows .arrow-left label[for="input-testimonial2"],
   input[name="testimonial"]:nth-child(3):checked~.testimonials-arrows .arrow-right label[for="input-testimonial4"],
   input[name="testimonial"]:nth-child(4):checked~.testimonials-arrows .arrow-left label[for="input-testimonial3"],
   input[name="testimonial"]:nth-child(4):checked~.testimonials-arrows .arrow-right label[for="input-testimonial1"] {
      z-index: 1;
   }

   .testimonial:nth-child(1) .photo-author {
      background-image: url(data:image/png;base64,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);
   }

   .testimonial:nth-child(2) .photo-author {
      background-image: url(data:image/png;base64,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);
   }

   .testimonial:nth-child(3) .photo-author {
      background-image: url(data:image/png;base64,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);
   }

   .testimonial:nth-child(4) .photo-author {
      background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABECAMAAAAPzWOAAAAC/VBMVEUPDhAvKCYdHBoNDAscGRgSERQJCAwJBwYpJCI5Pj8yNTYVFRgEBAQrJyTTqYhleIM9QUM3Ozw+NSwyKiYZGxwZGBUOCAUiHx2kdmaKWEJab320fmaPYVKPWEQjHRkEBAuFUD1CQjwpKCckJCAcFxRNXmqebFyGU0U6OjdCOzEvLiwdDgiAkpxne4fGlXujfmRFPTNBOC4XFBEdEw9vgo3GoYOhcGGpcFeBUEE4LygYGBpVaXdUZnK2iXCVYlOGW0t9VERERkJcT0A2OTlLQTYgGhYUDgtsf4vRo4eZaFpeUkOOVkB0SjkyMS4pKyvLnIGtfWWaaVCYYUtjVEQQEyk1LShgc4DNoX9aaXG0hGqvg2pZZGqlgGeffGGLXU4dHyAREQ5fdYS8hW2EVT9lPC47MikUFBF2iJNccX+ha1OJUj18Tj0+PztQRTlxRDRgQDR9j5nGnHq9inJQYm+RaFhISUWRW0N4SDo5NjALChcVCgZ5i5W0j3+ggWuZfGhMV16WcVuLWEp2U0NVSDtpQTQ0NDErFxIkFBG+lH9XbHq9fWpKWmWmeWCsdWCceF+sdFqjb1iJZ1dWVVdXTD+CSjhGLCUhIyQ+KyNNLyIpIRtxebeJmqJbbnfEj3VWXF+gZFFpWUZpSkFTNiovJx+ElZ/Qn4O7kHg3PF+yeV4WGzk2IxoxHRQkEgp3fbZWXpfQqIvNpYa/m4TEhnBWY2mgememc1+xZl9tXkmCV0YhJkYtMDIkJyhCJxt6f7zOmnyydGSQYEp9TEWJVzxzhpGtinmkhXSic2SYdGKmaVtHUltxXkyRWUxscrB0d6thaJxdYo/VrI6RemqOdGN0ZV1tY1mZY1FES0+OU0lwTkVXPDZLOzFdOCk4JyXPkntITnbBl3OEcGSXW1N7XE5tQz08JhxRWIpCS4E+RW67c2hfXluSYVkuNVEECCaAhMFudLVnbqSviG+FX1aMQUBhRTzJqJCpXVqURUeJiseAhLehUU9OSEBmao0fHy9ICAGRkcFcB1EeAAAMDUlEQVR42mTUQUwa+RfA8XGgqbU1+VcE/0QkFAiDQ9IoHEAThVYhUWcsaDxoGmoKkigVEtNVwkkRcA9SaZQCp65j0jTAcUlJl6TopU09m2rlpJ48deNtT/vejIzN9ptCucwn7/dmRuI3oUfQA74XL4xDCRai6XGtVkt/pFk2wSYiRmPPgwfDw8OLi4vr649HJ/+YHB19jP9/+Er8B4CMRmOCHm/ukAZmJZJZ8o2WplmEIpHuHgyd9W24nFd+QQDAWK1OHpBIbt++fQ8+hLkDmHFaRJDhFUhEREIwaB1eLsRLCslsQKelYZRuod5ugblBHmE3Y7A6mIG/lr9coVDAt0QSkOtoNiIQvW1tvTDNIszyWET+B4m7IGEPfArMFY1G4eNyAaPD8wDBIzAMKNuNxYIA3blz5/59Y0IrVUBRF2SCShvJZLJUKplMrqhiVt2KSBsSGCj/bPPIB+KRaMBZOmZxApPJsrFRSiaLhWomk6leFIrJDROMpWbBEMNZYL2Tk4AIBBig0HLeKBYK2Uwux3Gn4Xg87j/luFzmImlSuEg2EmmD5jBYDCo4iogMDQ0ZWTkeppjJceFwPMQwK8FgcIUJhVDKVUFxRkBBBMNZfkUSpERxL3rBhf0gBIM2G4VpdnaCQSYU9+eS0WhTZGqqb65PiD8RKsS10UBMFydhnvD5fEqhsTGlUgMTxbli1CJjp/oazfXyNxoRNG6QwsnuOQzBE11d8K9rGVMqfT4bEy5F1TQ7JYSj9H4fXofVEryARktLgnSVwruMg/JhCyBgY5gSOthxhEsuHS3jQweVxfVRQAQDEZZ0XZwzMQdF+TTQwsIYtsB3AIrGF6tGnQAICjhzbTjKKHEfa8EStGXjJBZzOGw2GxjICIhmB9JoDg58MIopPyVrEgJojj8QMYQJSLOlcOWAGshCAwFFg4jSHsuYLE2ANJS+ue6exW2iRYztsGR3HZVKBe4rbBVbhvi9CL9rqtcwSrOAtF6P0j28/hNCk4jY7XZvTTU4ODhx3Vs+DzThebl6XDTlaQEBpQlGaeseJj6KjZPO7JXD7gVhxGAwpLH5+XnrltVq5X95PKuvzi5KTlowoKY9nKWHGBfTSvPZcKxiV42AkTaUy6lUCoD377fgG4SJWs2z+porWVp5oxlq3YNkfcRfYjr5XjYMe62sQV01z3w69T61lQLEOj8xdgB7VYJyVbToBATL59XOvIx4I0YiEmNCzAqmrB3Npz6ltrYEZBmN5ZrnVayg/wlRq5169R7xTIyU57NXDIOvHuTrqh2ly9Y0HAfP4/GkNyH307Oss/kGcZrNapikXYgkSXnAWd+NOSpelcrO+E/jTGXQAPvcwkl8IcahMmx2Ts+8zuRbrxfbrFPrIZiEbH8mKO3ygL5+7LCrXjrCuWI1lzsNUbVBuMVW68RO3F+t+isj7ukfn7m6rIF0kHJE8jCJkLRdbrbUj+1eL3NaLbR9j/lP/SvU2uHhxNuunVAwxnFnq/byzMDTcKbOI1pAnFKp1OnME/1Ye3u/tF8qt9Rj3lrw1H/Mfb869vtDK7a1b4Asa0KhUDz2+f8+j3vgx3EuK2vSQoigoRYQCEi93lL/qvIy/ji8hOfn/vjKvo2ivh1twSga6vDSUHZvugfexbhsvUkLj5UWjgM51WriLnar/65+A/6kZ85U3krFDs8Jtb+/Aojt26EHbnDX8sR82d05PT0w8PurXCZTl9H8JKSUJKV6RLB+uaX3Kpfk/r689Hrh9sBXZR8M6vAIn3t4cWCOmRlE3oUcf+7utb7RNus6gICuEbNcbzrZPfaHEVEJrVEUGl+snc87N9Pp8iYgoDx8WHYb7Bd78JyA0W82kw0kYDabTs6p/bhdpQLk5cjIJSLU2tGXlHt6aem5O/XpUyceZ+nJk4GlL2tVRODZuEUQUhEJBCyZ8/19xg5vMGQYGfGu/ctkHYA0mf5xAH9R967SRv8/jgmvf19I/wYJ83iHM+ScAKdMAPW6wdK2GkOEKyoc67yFW7sLVHYmrLosYVcSuqan6vSEXW0jULVqqrM0O/S0Lq1LU8XSqo77Pu87pS9sJbCP39/zPO8eJyfvPzrPmEwul9FldDDBm4zRJS9Uy01M8NGV1iSZLCYrlqLprKgUKlbEx8C1PKs4cDyH/xaAoUpU3Z8buhZ0eF2uaZfca2QYxmgC0hRgGEfqlRZsSkysiKUt8bFSShQJV/X4TgWapCqVSl5RwVjr9U5POzK9014jwhuFTZnXHEVX8PTmRqGHRaP5GL+N5FU/vlN6Eo/LABQ4BDn56ZLD67j06RgMEwh5YWETmnw3lHAbPWKktJiyaNwfPn6GND4rPb5Plc8bAwPK1Lm5uclr3zIOx9AQqdEsL4ShVsuZY/8ztyZhd1FEpPFt/uOmhIjKgJz640BOYiqEBBKl6of7iarUkuJi5jxjzDbJ0UKNBDIPPnK2xsRniWia1miGNzZGIgiaKKYaS0srgAjGQP7fR3JyzD0lRcXF5JChCAyCMMU1T6ui4rEzWBD35sZGG7WVPJz5nJMVR/KJgSjNiWaz09yTUFuSvVICpAaIBEihXF5zqprsLhDf8tKSf2kb4RQtjU7VvhyzYAzYzU6n0zxQpDyPKgKilkg61Oomubz/tiI+FoZFM9LW5m/wb00jSsmt+nmVH6CHGIOosWpWKn8LBoMOo2kbGQVS+LQ1JctCDJ/f728DEolUdrW6amrcueoc7NGl6+12sz0/VTn05s2b3t7eFy+809jfzo4OiaQzo/FJbq7UwLKsxTPcQLK1JoYYmSypurp+qlFA6uyDCcr8ucm3a2trb9++e9frcBFkFF266qulUi6apVnWHXqNbCEGKYwUhUKRdntVQOp6ElQHLgkCKXMw08Qjox1dfyk4jqJZcRyQB0hDQwSJwneDlMvLO1PVGLbq0qHU1n6NR3AOAMZxeKddpvJOTCMZrWzJ5QzRbFwcbfGMfIZEG2Q7gJQZDHlpU2GrFYi+tpbco8HgCwRGIBDQ8khHfytXRonj4ljNK81CWyhE1iSaRJqcnBwlhcKdaZm1WdMRXFRFDMlNxkGQJq1W2wlk3VbFiaIxi8X9wecJbWKP/QISJSBcmfRM9T2b1arTYaSiInLkQRUbva6AFpEQxJlkoGhSZGZ4YXEmtOlfWiIIRcl2AMFjyXGKtPpwBEnXlayUkGSTB7g8gmTcu2GgCeJ73v7c5xkJteHE0kAMybuxO+TWgPLrPVtPuk6nR/BPf39fX2VzTY28vFwYp+v6f8vEYpYlSPvMons59LqNINFle/cK39zSFFT5JmxDCz3ZZiuIvsrKmq6urgykU6LWZlz/IioORViPG1U8npHlB68pGkpWARBiSHGBpZ0LD9ZhGL3NZgNSiQgEkE5teeePJ3YDwcL6FubnXy362oeHgdDU0f18EzC4n9OehO12vV7Xs43U8Aai1QbkHU/PfY8NxkAa9/z8gmdxpr2dosU0dXk/biJeAaOoH7Pb6/Q4KnqrdWUbKecT0I46z72PBhKp4l58BQRNRHv3k3m2lBtjg3bMU1dXp9etZDc3NwPB5/9EyrWSUfuJiwYewWmbx6poRjAOS2cVALl1mfyxhFfy1dmxsfAghhnDOMLWQGjOFoxR65OLMrGYXxXPwvIyNiiEQx97a9d/SHbuQSYmJk4/HB9/yL/I+/gsEg6PQeyr7FpfX+//6n2BiGaFg49V9Xk+UPjsxIWzZ8/+IqS7u/vwS5LIzxe28vIlSHTsn31/etdRER2HWDwz7eTYUodJurvxduiQ8H/h9SVJN8n/+fyEX3T3Lu+h7Z6dvxdcjo/VuJ8vj2g8/zZBhyAShFAYx+3FPn3b2Gxunw6HTDWNUTBuuCzX0xoHrsfLdraX6zC93/c9ldsfMk+Df9xVO+D+VGt1O667bt9xyDnfs4S+mGINWLq+f1+v60NV8j5WsfjgY4wLyEdmca64u8TGq2CkPnH6UdprrY2eDMyd7oIHSRZpSW28jG431azdNksb2das4MYIHVDysYcKOWBrxLJK6XG04wEHYQ7reqBLBssw5JGi9xh7aqXED2eSg2zOM7Hb+rKMTSHEZfxzGGVRz/P57xScaPRWEqyN34yFiohj/gGvuU9eHsgRSwAAAABJRU5ErkJggg==);
   }
</style>

<body>

   <?php include 'header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="box">
            <img src="images/about-img-1.png" alt="">
            <h3>why choose us?</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos
               pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima
               voluptatibus.</p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

         <div class="box">
            <img src="images/about-img-2.png" alt="">
            <h3>what we provide?</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos
               pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima
               voluptatibus.</p>
            <a href="shop.php" class="btn">our shop</a>
         </div>

      </div>

   </section>
   <h1 class="title">Customer reivews</h1>
   <div class="main">

      <div class="testimonials">
         <input type="radio" name="testimonial" id="input-testimonial1" checked>
         <input type="radio" name="testimonial" id="input-testimonial2">
         <input type="radio" name="testimonial" id="input-testimonial3">
         <input type="radio" name="testimonial" id="input-testimonial4">
         <div class="testimonials-inner">
            <div class="testimonial">
               <div class="testimonial-photo">
                  <div class="photo-background"></div>
                  <div class="photo-author"></div>
               </div>
               <div class="testimonial-text">
                  <p>Wait a second... you're telling me this testimonials slider is powered solely by CSS? That's some
                     next-level web wizardry! I'm sold! Give me that mind-blowing slider to my website!</p>
               </div>
               <div class="testimonial-author">Henry Schwengle</div>
            </div>
            <div class="testimonial">
               <div class="testimonial-photo">
                  <div class="photo-background"></div>
                  <div class="photo-author"></div>
               </div>
               <div class="testimonial-text">
                  <p>The older I get, the more I understand why roosters just scream to start the day.</p>
               </div>
               <div class="testimonial-author">Mr. George Robert</div>
            </div>
            <div class="testimonial">
               <div class="testimonial-photo">
                  <div class="photo-background"></div>
                  <div class="photo-author"></div>
               </div>
               <div class="testimonial-text">
                  <p>Two of my friends have never met each other. Before they spoke, I told both of them that the other
                     is a bit deaf. They shouted at each other for a few minutes before they realized that I'm an
                     asshole.</p>
               </div>
               <div class="testimonial-author">Doodle Wobblepants</div>
            </div>
            <div class="testimonial">
               <div class="testimonial-photo">
                  <div class="photo-background"></div>
                  <div class="photo-author"></div>
               </div>
               <div class="testimonial-text">
                  <p>Turning on your lights and sirens after losing a drag race is just poor sportsmanship, man.</p>
               </div>
               <div class="testimonial-author">John "Vroom" Cena</div>
            </div>
         </div>
         <div class="testimonials-arrows">
            <div class="arrow arrow-left">
               <label for="input-testimonial1"></label>
               <label for="input-testimonial2"></label>
               <label for="input-testimonial3"></label>
               <label for="input-testimonial4"></label>
               <span></span>
            </div>
            <div class="arrow arrow-right">
               <label for="input-testimonial1"></label>
               <label for="input-testimonial2"></label>
               <label for="input-testimonial3"></label>
               <label for="input-testimonial4"></label>
               <span></span>
            </div>
         </div>
         <div class="testimonials-bullets">
            <label for="input-testimonial1">
               <div class="bullet">
                  <div>
                     <span></span>
                  </div>
               </div>
            </label>
            <label for="input-testimonial2">
               <div class="bullet">
                  <div>
                     <span></span>
                  </div>
               </div>
            </label>
            <label for="input-testimonial3">
               <div class="bullet">
                  <div>
                     <span></span>
                  </div>
               </div>
            </label>
            <label for="input-testimonial4">
               <div class="bullet">
                  <div>
                     <span></span>
                  </div>
               </div>
            </label>
         </div>
      </div>
   </div>


   <!-- <section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>
 -->
   </section>









   <?php include 'footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>