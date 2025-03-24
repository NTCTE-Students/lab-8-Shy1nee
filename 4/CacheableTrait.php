<?php
trait Cacheable {
    private $cache = [];

    public function setCache($key, $data) {
        $this->cache[$key] = $data;
    }

    public function getCache($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }
}

class DataProvider {
    use Cacheable;

    public function fetchData($key) {
        $cachedData = $this->getCache($key);
        if ($cachedData) {
            echo "Fetching data from cache for key: {$key}<br>";
            return $cachedData;
        }

        // Эмуляция запроса данных
        $data = "Data for {$key}";
        $this->setCache($key, $data);
        echo "Fetching new data for key: {$key}<br>";
        return $data;
    }
}

class ProductRepository {
    use Cacheable;

    public function getProduct($productId) {
        $cachedProduct = $this->getCache($productId);
        if ($cachedProduct) {
            echo "Fetching product from cache for ID: {$productId}<br>";
            return $cachedProduct;
        }

        // Эмуляция запроса продукта
        $product = "Product ID: {$productId}";
        $this->setCache($productId, $product);
        echo "Fetching new product for ID: {$productId}<br>";
        return $product;
    }
}

// Пример использования
$dataProvider = new DataProvider();
$dataProvider->fetchData("users");

$productRepo = new ProductRepository();
$productRepo->getProduct(101);
$productRepo->getProduct(101);
