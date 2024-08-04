<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="container mt-8">
        <div class="mx-auto w-full bg-white shadow-lg rounded-lg max-w-md">
            <div class="grid gap-4 p-4 mb-4 bg-gray-900 mx-auto m-6 rounded-lg shadow-lg">
                <form  action="{{route('tablet.update',$tablet->id)}}" method="POST" >
                    @csrf
                    @method('put')
                   <div class="mb-2">
                        <label class=" font-medium text-white  shadow-lg rounded-lg gray-600" for="name" >Name</label>
                        <input class="w-full font-medium rounded-lg" type="text" name="name" id="name" value="{{$tablet->name}}">
                   </div>

                   <div class="mb-2">
                        <label class=" font-medium text-white  shadow-lg rounded-lg gray-600" for="price">Price</label>
                        <input class="w-full font-medium rounded-lg" type="text" name="price" id="price" value="{{$tablet->price}}">
                  </div>

                    <div class="mb-2">
                        <label class=" font-medium text-white  shadow-lg rounded-lg gray-600" for="color">Color</label>
                        <input class="w-full font-medium rounded-lg" type="text" name="color" id="color" value="{{$tablet->color}}">
                    </div>

                    <div class="mb-6">
                        <label class=" font-medium text-white  shadow-lg rounded-lg gray-600" for="stock">Stock</label>
                        <input class="w-full font-medium rounded-lg" type="text" name="stock" id="stock" value="{{$tablet->stock}}">
                    </div>

                        <button  type="submit" class="focus:outline-none w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>

                </form>
            </div>
        </div>
    </div>

</body>
</html>

