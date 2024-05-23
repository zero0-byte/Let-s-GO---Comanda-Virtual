// Generated by Selenium IDE
import org.junit.Test;
import org.junit.Before;
import org.junit.After;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.is;
import static org.hamcrest.core.IsNot.not;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.RemoteWebDriver;
import org.openqa.selenium.remote.DesiredCapabilities;
import org.openqa.selenium.Dimension;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.interactions.Actions;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.Alert;
import org.openqa.selenium.Keys;
import java.util.*;
import java.net.MalformedURLException;
import java.net.URL;
public class CriaodeProdutoTest {
  private WebDriver driver;
  private Map<String, Object> vars;
  JavascriptExecutor js;
  @Before
  public void setUp() {
    driver = new ChromeDriver();
    js = (JavascriptExecutor) driver;
    vars = new HashMap<String, Object>();
  }
  @After
  public void tearDown() {
    driver.quit();
  }
  @Test
  public void criaodeProduto() {
    driver.get("https://letsgo123.online/login");
    driver.manage().window().setSize(new Dimension(1936, 1048));
    driver.findElement(By.id("username")).click();
    driver.findElement(By.id("username")).sendKeys("adm");
    driver.findElement(By.id("password")).sendKeys("Ket");
    driver.findElement(By.id("password")).sendKeys(Keys.ENTER);
    driver.findElement(By.linkText("Produtos")).click();
    driver.findElement(By.cssSelector(".card:nth-child(1) > .card-header")).click();
    driver.findElement(By.id("nome")).click();
    driver.findElement(By.id("nome")).sendKeys("Ruffles");
    driver.findElement(By.id("valor")).click();
    driver.findElement(By.id("custo")).click();
    driver.findElement(By.id("estoque")).click();
    driver.findElement(By.id("estoque")).sendKeys("5");
    driver.findElement(By.cssSelector(".btn-primary")).click();
  }
}
