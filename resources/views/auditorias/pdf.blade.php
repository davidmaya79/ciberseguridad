<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auditoría PDF</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 30px auto;
            max-width: 800px;
            padding: 20px;
            background-color: #f8f8f8;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .text-center {
            text-align: center;
        }
        .logo {
            display: block;
            margin: 0 auto;
            width: 100px;
            height: auto;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .table {
            width: 100%;
            margin-bottom: 30px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
            font-weight: bold;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/cliente.jpg') }}" alt="Logo" class="logo">
        <h2>DOCUMENTACIÓN AUDITORÍA</h2>
        
        <table class="table">
            
           
                
                    <th>Cliente<td>{{ $auditoria->cliente->nombre_cliente }}</td></th> 
                     
                 
                {{-- <tr>
                     
                    <tr>
                         
                        <td>{{ $auditoria->documentacion_auditoria }}</td>
                    </tr>
                    
                </tr> --}}

                <tr>
                    <th>Correo</th>
                    <td>{{ $auditoria->cliente->email_cliente }}</td>
                </tr>

            
             
        </table>
    </div>
</body>
</html>

  
<div class="chapterPage">
    <h1>Cibersecurity</h1>
    <hr />
    <p class="highlight">
        {{ $auditoria->documentacion_auditoria }}
    </p>
    <p class="highlightLight">
        Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui. Ut varius accumsan felis, quis consectetur arcu interdum eu. Nullam dapibus mattis egestas.
    </p>
    <div class="twoTextColumns">
        <h4>PELLENTESQUE CURSUS</h4>
        <p>Commodo iaculis. Aliquam erat volutpat. Donec vel ultricies quam, ac laoreet purus. Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>ALIQUAM ERAT VOLUTPAT</h4>
        <p>Quisque ligula orci, ultrices nec dignissim id, pretium eu justo. Aliquam dignissim justo ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui.</p>
        <p>Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>DUIS ORNARE TURPIS</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu vulputate varius. Quisque ligula orci, ultrices nec dignissim id, pretium eu justo.</p>
        <h4>ALIQUAM DIGNISSIM JUSTO</h4>
        <p>Ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae condimentum ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui. Ut varius accumsan felis, quis consectetur arcu interdum eu. Nullam dapibus mattis egestas.</p>
        <h4>PELLENTESQUE CURSUS COMMODO</h4>
        <p>Iaculis. Aliquam erat volutpat. Donec vel ultricies quam, ac laoreet purus. Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>CLASS APTENT TACITI AD LITORA</h4>
        <p>torquent per conubia nostra, per inceptos himenaeos. Nullam lacus turpis, iaculis quis mattis at, consequat vel sapien. Pellentesque finibus ligula mauris, vitae rutrum metus ullamcorper at. Aliquam erat volutpat. Vestibulum pulvinar dui sapien, mollis tempus tortor laoreet ac.</p>
    </div>
</div>
 
<div class="chapterPage">
    <h1>Name of Chapter</h1>
    <hr />
    <p class="highlight">
        Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et.    
    </p>
    <div class="twoColumns">
        <div>
            <h4>PELLENTESQUE CURSUS</h4>
            <p>Commodo iaculis. Aliquam erat volutpat. Donec vel ultricies quam, ac laoreet purus. Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
            <h4>ALIQUAM ERAT VOLUTPAT</h4>
            <p>Quisque ligula orci, ultrices nec dignissim id, pretium eu justo. Aliquam dignissim justo ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui.</p>
            <p>Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
            <h4>DUIS ORNARE TURPIS</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu vulputate varius. Quisque ligula orci, ultrices nec dignissim id, pretium eu justo.</p>
            <h4>ALIQUAM DIGNISSIM JUSTO</h4>
            <p>Ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae condimentum ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui. Ut varius accumsan felis, quis consectetur arcu interdum eu. Nullam dapibus mattis egestas.</p>    
        </div>
        <div class="imageContainerColumns"><img src="https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" /></div>
    </div>
    <div class="pageBreak"></div>
    <div class="imageContainer"><img src="https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" /></div>
    <div class="twoTextColumns">
        <h4>PELLENTESQUE CURSUS</h4>
        <p>Commodo iaculis. Aliquam erat volutpat. Donec vel ultricies quam, ac laoreet purus. Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>ALIQUAM ERAT VOLUTPAT</h4>
        <p>Quisque ligula orci, ultrices nec dignissim id, pretium eu justo. Aliquam dignissim justo ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui.</p>
        <p>Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>DUIS ORNARE TURPIS</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu vulputate varius. Quisque ligula orci, ultrices nec dignissim id, pretium eu justo.</p>
        <h4>ALIQUAM DIGNISSIM JUSTO</h4>
        <p>Ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae condimentum ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui. Ut varius accumsan felis, quis consectetur arcu interdum eu. Nullam dapibus mattis egestas.</p>
        <h4>PELLENTESQUE CURSUS COMMODO</h4>
        <p>Iaculis. Aliquam erat volutpat. Donec vel ultricies quam, ac laoreet purus. Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>CLASS APTENT TACITI AD LITORA</h4>
        <p>torquent per conubia nostra, per inceptos himenaeos. Nullam lacus turpis, iaculis quis mattis at, consequat vel sapien. Pellentesque finibus ligula mauris, vitae rutrum metus ullamcorper at. Aliquam erat volutpat. Vestibulum pulvinar dui sapien, mollis tempus tortor laoreet ac.</p>
    </div>
    <p class="highlight">
        Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et.
    </p>
    <div class="pageBreak"></div>
    <p class="highlight">
        Quisque ligula orci, ultrices nec dignissim id, pretium eu justo. Aliquam dignissim justo ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed sapien porta et.
    </p>
    <div class="twoTextColumns">
        <h4>PELLENTESQUE CURSUS</h4>
        <p>Commodo iaculis. Aliquam erat volutpat. Donec vel ultricies quam, ac laoreet purus. Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>ALIQUAM ERAT VOLUTPAT</h4>
        <p>Quisque ligula orci, ultrices nec dignissim id, pretium eu justo. Aliquam dignissim justo ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui.</p>
        <p>Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>ALIQUAM DIGNISSIM JUSTO</h4>
        <p>Ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae condimentum ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui. Ut varius accumsan felis, quis consectetur arcu interdum eu. Nullam dapibus mattis egestas.</p>
        <h4>PELLENTESQUE CURSUS COMMODO</h4>
        <p>Iaculis. Aliquam erat volutpat. Donec vel ultricies quam, ac laoreet purus. Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
    </div>
    <div class="imageContainer"><img src="https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" /></div>
    <div class="pageBreak"></div>
    <div class="imageContainer"><img src="https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" /></div>
    <p class="highlight">
        Aenean convallis lorem diam, ut imperdiet lectus ornare<span class="footnote">Mary Shelley, Frankenstein; or, the Modern Prometheus, ed. M.K. Joseph (Oxford: Oxford University Press, 1998), 91.</span> eget. Vestibulum consequat<span class="footnote">Shelley, Frankenstein, 91.</span> aliquam felis, sed porttitor sapien porta et.
    </p>
    <div class="twoTextColumns">
        <h4>ALIQUAM ERAT VOLUTPAT</h4>
        <p>Quisque ligula orci, ultrices nec dignissim id, pretium eu justo. Aliquam dignissim justo ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui.</p>
        <p>Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>DUIS ORNARE TURPIS</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu vulputate varius. Quisque ligula orci, ultrices nec dignissim id, pretium eu justo.</p>
        <h4>PELLENTESQUE CURSUS COMMODO</h4>
        <p>Iaculis. Aliquam erat volutpat. Donec vel ultricies quam, ac laoreet purus. Fusce faucibus imperdiet ultrices. Fusce dictum lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        <h4>CLASS APTENT TACITI AD LITORA</h4>
        <p>torquent per conubia nostra, per inceptos himenaeos. Nullam lacus turpis, iaculis quis mattis at, consequat vel sapien. Pellentesque finibus ligula mauris, vitae rutrum metus ullamcorper at. Aliquam erat volutpat. Vestibulum pulvinar dui sapien, mollis tempus tortor laoreet ac.</p>
    </div>
    <div class="pageBreak"></div>
    <div class="imageContainer">
      <img src="https://images.unsplash.com/photo-1587725835427-a9ff8e559dc3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" />
    </div>
    <div class="twoColumns">
        <p class="highlight">
            Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et.
        </p>
        <div>
            <h4>ALIQUAM ERAT VOLUTPAT</h4>
            <p>Quisque ligula orci, ultrices nec dignissim<span class="footnote">Mary Shelley, Frankenstein; or, the Modern Prometheus, ed. M.K. Joseph (Oxford: Oxford University Press, 1998), 91.</span> id, pretium eu justo. Aliquam dignissim justo ante, nec accumsan lectus lobortis eleifend. Aenean convallis lorem diam, ut imperdiet lectus ornare eget. Vestibulum consequat aliquam felis, sed porttitor sapien porta et. Mauris vitae ipsum, sit amet euismod elit. Ut quis egestas libero. Duis vitae lacus dui.</p>
            <p>Fusce faucibus imperdiet ultrices. Fusce dictum<span class="footnote">Shelley, Frankenstein, 91.</span> lacus augue, at volutpat ante ultricies quis. Nam vitae justo non ligula sodales tempus.</p>
        </div>
    </div>
</div>
<!--
    The last page in our book is the bibliography page with one column text and one image.
-->
<div class="bibliographyPage">
    <h1>Bibliography</h1>
    <hr />
    <div class="twoColumns">
        <div>
            <h4>01</h4>
            <p>Diaz, S. A., & Hall, R. A. (2020). Fighting fake news: Inspiring critical thinking with memorable learning experiences. College & Research Libraries News. 81(5). <a href="https://doi.org/10.5860/crln.81.5.239">https://doi.org/10.5860/crln.81.5.239</a></p>
            <h4>02</h4>
            <p>Inskeep, S. (2016, December 11). A finders guide to facts. NPR. <a href="http://www.npr.org/2016/12/11/505154631/a-finders-guide-to-facts">http://www.npr.org/2016/12/11/505154631/a-finders-guide-to-facts</a></p>
            <h4>03</h4>
            <p>Kletter, M. (n.d.). The importance of critical thinking in the age of fake news. School Library Journal. <a href="https://www.slj.com?detailStory=the-importance-of-critical-thinking-in-age-of-fake-news-webcast">https://www.slj.com?detailStory=the-importance-of-critical-thinking-in-age-of-fake-news-webcast</a></p>
            <h4>04</h4>
            <p>Kohnen, A. M. (2019). Teaching online research as a critical literacy skill. English Journal, 108(5), 25-30.</p>
            <h4>05</h4>
            <p>Machete P., Turpin M. (2020) The use of critical thinking to identify fake news: a systematic literature review. In: M. Hattingh, M. Matthee, H. Smuts, I. Pappas, Y. Dwivedi, & M. Mäntymäki. (eds) Responsible Design, Implementation and Use of Information and Communication Technology. Springer, Cham. <a href="https://doi-10.1007/978-3-030-45002-1_20">https://doi-10.1007/978-3-030-45002-1_20</a></p>
        </div>
        <div class="imageContainerColumns"><img src="https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" /></div>
    </div>
</div>