<?php
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

// require_once("controller/dynamic_function.php");

function saveImages($formDetails, $fileDetails)
{
    global $pdo;

    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath);
        
    $imageuploadedpath = "";
    if (isset($fileDetails['images'])) {
        for ($a = 0; $a < count($fileDetails["images"]["name"]); $a++) {
            $link = $formDetails['links'][$a];
        
            $image = array(
        "name" => $fileDetails["images"]["name"][$a],
        "type" => $fileDetails["images"]["type"][$a],
        "tmp_name" => $fileDetails["images"]["tmp_name"][$a],
        "error" => $fileDetails["images"]["error"][$a],
        "size" => $fileDetails["images"]["size"][$a],
        );
         
            $imageuploadedpath = ImageUpload($directoryPath, $image);

            if ($fileDetails['images']) {
                $data = [
                'Path' => $imageuploadedpath,
                'Link' => $link,
            ];

                $sql = "INSERT INTO `client_image` (`Path`, `Link`) VALUES (:Path, :Link);";
                $stmt = $pdo->prepare($sql);
                if ($stmt->execute($data)) {
                    $_SESSION['success_message'] = "Image Successfully Save!";
                } else {
                    $_SESSION['error_message'] = "Error occured!";
                }
            }
        }
    }
}

function saveContent($formDetails)
{
    global $pdo;

    $data = [
        'NavId' => $formDetails['Parent'],
        'ParentId' => '0',
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "INSERT INTO `content` (`NavId`, `ParentId`, `Title`, `Description`, `Status`) VALUES (:NavId, :ParentId, :Title, :Description, :Status);";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {
        $_SESSION['success_message'] = "Content Successfully Save!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function updateContent($formDetails)
{
    global $pdo;

    $data = [
        'IdContent' => $formDetails['id_content'],
        'ParentId' => '0',
        'Title' => $formDetails['Title'],
        'Description' => $formDetails['Description'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "UPDATE `content` SET
        `ParentId` = :ParentId, 
        `Title` = :Title, 
        `Description`= :Description, 
        `Status` = :Status WHERE IdContent = :IdContent";

        
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {
        $_SESSION['success_message'] = "Content Successfully Updated!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function getContent($idNav)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM content WHERE NavId = '$idNav'")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}
function getSingleContent($idContent)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM content WHERE idContent = '$idContent'")->fetch();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}


function getMenu($idNav)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM nav_menu WHERE IdNavMenu = '$idNav' AND NavStatus != 1")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}


function deleteImages($ImageId)
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM `client_image` Where IdClientImage = :id");
    $query->execute(['id' => $ImageId]);
    $data = $query->fetch();

    @unlink("../../".$data['Path']);

    $count=$pdo->prepare("DELETE FROM `client_image` WHERE `client_image`.`IdClientImage` = :id");
    $count->bindParam(":id", $ImageId, PDO::PARAM_INT);
    if ($count->execute()) {
        $_SESSION['success_message'] = "Image Successfully Deleted!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function getAllImages()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `client_image`")->fetchAll();

    return $query;
}

function saveAdsBanner($fileDetails)
{
    global $pdo;

    $datenow = date('YmdHis');
        
    $imageuploadedpath = "";
    if (isset($fileDetails['images'])) {
        for ($a = 0; $a < count($fileDetails["images"]["name"]); $a++) {
            $image = array(
        "name" => $fileDetails["images"]["name"][$a],
        "type" => $fileDetails["images"]["type"][$a],
        "tmp_name" => $fileDetails["images"]["tmp_name"][$a],
        "error" => $fileDetails["images"]["error"][$a],
        "size" => $fileDetails["images"]["size"][$a],
        );
         
            $imageuploadedpath = imageUpload2($datenow, $image);

            if ($fileDetails['images']) {
                $data = [
                'Path' => $imageuploadedpath,
            ];

                $sql = "INSERT INTO `ads_banner` (`Path`) VALUES (:Path);";
                $stmt = $pdo->prepare($sql);
                if ($stmt->execute($data)) {
                    $_SESSION['success_message'] = "Ads Banner Successfully Save!";
                } else {
                    $_SESSION['error_message'] = "Error occured!";
                }
            }
        }
    }
}

function deleteAdsImages($ImageId)
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM `ads_banner` Where IdAds = :id");
    $query->execute(['id' => $ImageId]);
    $data = $query->fetch();

    @unlink("../../".$data['Path']);

    $count=$pdo->prepare("DELETE FROM `ads_banner` WHERE `ads_banner`.`IdAds` = :id");
    $count->bindParam(":id", $ImageId, PDO::PARAM_INT);
    if ($count->execute()) {
        $_SESSION['success_message'] = "Ads Successfully Deleted!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function getAllAdsImages()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `ads_banner`")->fetchAll();

    return $query;
}

function getAllProducts()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `product`")->fetchAll();

    return $query;
}

function saveFeaturedProducts($formDetails)
{
    global $pdo;

    $data = [
        'Title' => $formDetails['Title'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "INSERT INTO `featured_products` (`Title`, `Status`) VALUES (:Title, :Status);";

    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {
        $last_id = $pdo->lastInsertId();

        if (isset($formDetails['Products']) && !empty($formDetails['Products'])) {
            foreach ($formDetails['Products'] as $key => $product) {
                $data_identifier = [
                    'FeaturedId' => $last_id,
                    'ProductId' => $product
                ];

                $sql_x = "INSERT INTO `featured_products_images` (`FeaturedId`, `ProductId`) VALUES (:FeaturedId, :ProductId);";
                $stmt_x = $pdo->prepare($sql_x);
                $stmt_x->execute($data_identifier);
            }
        }

        $_SESSION['success_message'] = "Featured Product Successfully Save!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function updateFeaturedProducts($formDetails)
{
    global $pdo;

    $data = [
        'IdFeatured' => $formDetails['featured_id'],
        'Title' => $formDetails['Title'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "UPDATE `featured_products` SET 
    `Title` = :Title, 
    `Status` = :Status WHERE IdFeatured = :IdFeatured";

    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {
        $last_id = $formDetails['featured_id'];

        if (isset($formDetails['Products']) && !empty($formDetails['Products'])) {
            foreach ($formDetails['Products'] as $key => $product) {
                $data_identifier = [
                    'FeaturedId' => $last_id,
                    'ProductId' => $product
                ];

                $sql_x = "INSERT INTO `featured_products_images` (`FeaturedId`, `ProductId`) VALUES (:FeaturedId, :ProductId);";
                $stmt_x = $pdo->prepare($sql_x);
                $stmt_x->execute($data_identifier);
            }
        }

        $_SESSION['success_message'] = "Featured Product Successfully Updated!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function deleteFeaturedProductImage($idFeturedImages)
{
    global $pdo;

    $count=$pdo->prepare("DELETE FROM `featured_products_images` WHERE `featured_products_images`.`IdFeturedImages` = :id");
    $count->bindParam(":id", $idFeturedImages, PDO::PARAM_INT);
    if ($count->execute()) {
        $_SESSION['success_message'] = "Featured Product Image Successfully Deleted!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function getFeaturedProducts()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `featured_products`")->fetchAll();

    return $query;
}

function getSingleFeaturedProducts($featured_id)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `featured_products` WHERE IdFeatured = '$featured_id'")->fetch();

    return $query;
}

function getFeaturedProductsById($product_id)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `featured_products_images` WHERE ProductId = '$product_id'")->fetch();

    return $query;
}

function getFeaturedProductsImages($featured_id)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `featured_products_images` fpi INNER JOIN product p ON fpi.ProductId = p.IdProduct WHERE fpi.FeaturedId = '$featured_id'")->fetchAll();

    return $query;
}



function updateExecutives($formDetails, $filesData)
{
    global $pdo;
    
    $datenow = date("YmdHis");

    $data = [
        'Id' => $formDetails['executive_id'],
        'Name' => $formDetails['Name'],
        'Position' => $formDetails['Position'],
        'Status' => $formDetails['Status'],
    ];

    $sql = "UPDATE `content_executives` SET 
    `Name` = :Name, 
    `Position` = :Position, ";


    if ($filesData['LogoImage']['name'] != "") {
        $logoImage = imageUpload2($datenow, $filesData['LogoImage']);
        $data['Image'] = $logoImage;

        $sql .= "`Image` = :Image,";
    }

    $sql .= "`Status` = :Status WHERE IdExecutives = :Id";

    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {
        $_SESSION['success_message'] = "Executives Successfully Updated!";
    } else {
        $_SESSION['error_message'] = "Error occured!";
    }
}

function getAllExecutives()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `content_executives`")->fetchAll();

    return $query;
}

function getExecutivesById($executive_id)
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM `content_executives` WHERE IdExecutives = '$executive_id'")->fetch();

    return $query;
}

function imageUpload2($directory, $file)
{
    $structure = '../../uploads/clientImage/'.$directory.'/';
    $databasepath = 'uploads/clientImage/'.$directory.'/';
  
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimetype = finfo_file($finfo, $file['tmp_name']);
    if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/gif' || $mimetype == 'image/png') {
        if (!file_exists($structure)) {
            if (!mkdir($structure, 0777, true)) {
            } else {
                move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
                return $databasepath.$file["name"];
            }
        } else {
            move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
            return $databasepath.$file["name"];
        }
    } else {
        echo 'The source file type ' . $mimetype . ' is not supported';
        die();
    }
}

  function savePressRelease($formDetails)
  {
      global $pdo;

      $data = [
        'BlogId' => $formDetails['Blog'],
        'Status' => $formDetails['Status'],
      ];

      $sql = "INSERT INTO `press_release` (`BlogId`, `Status`) VALUES (:BlogId, :Status);";

      if (count(pullPressRelease()) < 3) {

          $stmt = $pdo->prepare($sql);
          if ($stmt->execute($data)) {
              $_SESSION['success_message'] = "Press Release Successfully Save!";
          } else {
              $_SESSION['error_message'] = "Error occured!";
          }
          
      } else {
          $_SESSION['error_message'] = "The maximum can be added is 3!";
      }
  }

  function deletePressRelease($id_press)
  {
      global $pdo;

      $count=$pdo->prepare("DELETE FROM `press_release` WHERE `press_release`.`IdPress` = :id");
      $count->bindParam(":id", $id_press, PDO::PARAM_INT);
      if ($count->execute()) {
          $_SESSION['success_message'] = "Press release Successfully Deleted!";
      } else {
          $_SESSION['error_message'] = "Error occured!";
      }
  }

  function pullPressRelease()
  {
      global $pdo;

      $query = $pdo->query("SELECT * FROM `press_release` pr INNER JOIN news_blog nb ON pr.BlogId = nb.IdBlog")->fetchAll();

      if (empty($query) || count($query) == 0) {
          return [];
      } else {
          return  $query;
      }
  }

  
function getAllBlogPost()
{
    global $pdo;

    $query = $pdo->query("SELECT * FROM news_blog")->fetchAll();

    if (empty($query) || count($query) == 0) {
        return [];
    } else {
        return  $query;
    }
}

function imageUpload($directory, $file)
{
    $structure = '../../uploads/clientImage/'.$directory.'/';
    $databasepath = 'uploads/clientImage'.$directory.'/';
  
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimetype = finfo_file($finfo, $file['tmp_name']);
    if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/gif' || $mimetype == 'image/png') {
        if (!file_exists($structure)) {
            if (!mkdir($structure, 0777, true)) {
            } else {
                move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
                return $databasepath.$file["name"];
            }
        } else {
            move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
            return $databasepath.$file["name"];
        }
    } else {
        echo 'The source file type ' . $mimetype . ' is not supported';
        die();
    }
}
