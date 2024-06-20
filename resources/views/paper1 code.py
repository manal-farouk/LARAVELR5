import time
import math
import random  # For demonstration purposes (will replace with actual sensor readings)

# Initialize your ADC settings, pins, calibration parameters, WiFi settings, etc.
# Replace placeholders with actual values
ADC_PIN_VOLTAGE = 0
ADC_PIN_CURRENT = 1
SAMPLE_WINDOW_SIZE = 10  # Number of samples per window
WIFI_SSID = "lap_wifi_ssid"
WIFI_PASSWORD = "lap_wifi_password"

def read_sensor_values():
    # Simulate reading voltage and current (replace with actual sensor readings)
    voltage = random.uniform(220, 240)  # Example: 220-240V
    current = random.uniform(5, 10)     # Example: 5-10A
    return voltage, current

def calculate_rms(values):
    return math.sqrt(sum(v**2 for v in values) / len(values))

def calculate_power_factor(apparent_power, real_power):
    return real_power / apparent_power
def main():
    start_time = time.time()

    while True:
        voltage_samples = []
        current_samples = []

        # Read samples
        for _ in range(SAMPLE_WINDOW_SIZE):
            voltage, current = read_sensor_values()
            voltage_samples.append(voltage)
            current_samples.append(current)

        # Calculate RMS values
        V_RMS = calculate_rms(voltage_samples)
        I_RMS = calculate_rms(current_samples)
        P_RMS = V_RMS * I_RMS


        # Calculate apparent power (S), reactive power (Q), and power factor (PF)
        S = V_RMS * I_RMS
        Q = math.sqrt(S**2 - P_RMS**2)
        PF = calculate_power_factor(S, P_RMS)

        # Calculate elapsed time
        elapsed_time = time.time() - start_time

        # Send data to IoT server (you'll need to implement this part)
        # Use your preferred IoT protocol (e.g., MQTT, CoAP, HTTP)

        print(f"Elapsed time: {elapsed_time:.2f} seconds")
        print(f"Apparent Power (S): {S:.2f} VA")
        print(f"Reactive Power (Q): {Q:.2f} VAR")
        print(f"Power Factor (PF): {PF:.2f}")

        # Repeat the process

if __name__ == "__main__":
    main()
