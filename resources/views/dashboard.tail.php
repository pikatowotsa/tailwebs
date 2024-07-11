<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="<?=BASE_URL?>/resources/css/style.css" rel="stylesheet">
</head>
<body>
 <!-- Button Group -->
  <div class="flex justify-end pr-4">
 <div class="flex gap-x-2 ml-auto py-1 md:ps-6 md:order-3 md:col-span-3">
  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-600 text-black hover:bg-red-100 transition disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-lime-500">
    <a href="/logout" class="font-bold">Logout</a>
  </button>
</div>
  </div>
    <!-- End Button Group -->

    <h1 class="pl-10 text-2xl text-red-600 font-bold">Dashboard</h1>
    <?php require_once BASE_PATH . "/resources/views/component/table.component.php" ?>
</body>
</html>